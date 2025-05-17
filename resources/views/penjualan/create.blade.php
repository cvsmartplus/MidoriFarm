@extends('layout.layout')

@php
    $title = 'Penjualan';
    $subTitle = 'Buat Penjualan';
@endphp

@section('content')
@push('style')
  <style>
    .select2-container--default .select2-selection--single {
  height: 32px;
  padding: 4px 8px;
  display: flex;
  align-items: center;
}

.select2-container--default .select2-selection--single .select2-selection__rendered {
  line-height: normal; /* biar teks nggak kegencet */
  padding-left: 0;
}

  </style>
@endpush
<div class="row gy-4">
  <div class="col-12">

    {{-- Pilih Pelanggan --}}
    <div class="d-inline-block mb-3">
      <div class="card radius-12">
        <div class="card-body d-flex align-items-center gap-3">
          <label class="mb-0 fw-semibold">Pelanggan:</label>
          <select id="customerSelect" name="id_customer" class="form-select form-select-sm" style="width:100%;" required>
            <option value="" disabled selected></option>
            @foreach($pelanggan as $cust)
              <option value="{{ $cust->id }}">{{ $cust->name }}</option>
            @endforeach
          </select>
        </div>    
      </div>
    </div>

    {{-- Tabel Keranjang --}}
    <div class="card radius-12 mb-3">
      <div class="card-body">
        <div class="table-responsive">
          <table id="dataTable" class="table bordered-table sm-table mb-0">
            <thead class="bg-secondary-light">
              <tr>
                <th class="text-center">Produk</th>
                <th class="text-center">Harga per-kilo</th>
                <th class="text-center">Kuantitas</th>
                <th class="text-center">Subtotal</th>
                <th class="text-center">Aksi</th>
              </tr>
            </thead>
            <tbody><!-- baris akan di-render JS --></tbody>
            <tfoot>
              <tr>
                <td colspan="3" class="text-end pe-4"><strong>Total :</strong></td>
                <td class="text-center"><strong id="footer-total">Rp0</strong></td>
                <td></td>
              </tr>
            </tfoot>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>

{{-- Modal Add --}}
<div class="modal fade" id="addModal" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      <form id="addForm" onsubmit="return addToCart()">
        <div class="modal-header">
          <h5 class="modal-title">Tambah Penjualan</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
        </div>
        <div class="modal-body">
          @csrf
          <div class="mb-3">
            <label class="form-label">Produk</label>
            <select id="id_product" class="form-select" required>
              <option value="" disabled selected>Pilih Produk</option>
              @foreach($produk as $item)
                <option value="{{ $item->id }}" data-price="{{ $item->selling_price }}">
                  {{ $item->name_product }}
                </option>
              @endforeach
            </select>
          </div>
          <div class="mb-3 row gx-2">
            <div class="col">
              <label class="form-label">Harga</label>
              <input type="number" id="price" class="form-control" readonly>
            </div>
            <div class="col">
              <label class="form-label">Qty</label>
              <input type="number" id="quantity" class="form-control" min="1" value="1" required>
            </div>
          </div>
          <div class="mb-3">
            <label class="form-label">Subtotal</label>
            <input type="number" id="total" class="form-control" readonly>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-outline-danger" data-bs-dismiss="modal">Batal</button>
          <button type="submit" class="btn bg-primary-500 text-white">Tambah</button>
        </div>
      </form>
    </div>
  </div>
</div>

{{-- Form tersembunyi --}}
<form id="cartForm"
      action="{{ routeByRole('admin.penjualan.store','owner.penjualan.store',null,'akuntan.penjualan.store') }}"
      method="POST" style="display:none;">
  @csrf
  <input type="hidden" name="id_customer" id="cartCustomer">
  <div id="cartItemsInput"></div>
</form>
@endsection

@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function() {
  // 1. Select pelanggan wajib
  $('#customerSelect').select2({
    placeholder: "Pilih Pelanggan",
    allowClear: true,
    width: 'resolve',
  });
  
  // 2. DataTable inisialisasi sekali saja
  if ($.fn.DataTable.isDataTable('#dataTable')) {
    $('#dataTable').DataTable().destroy();
  }
  $('#dataTable').DataTable({
    paging: false,
    info: false,
    autoWidth: true,
    fixedHeader: false,
    initComplete: function () {
        var btns = document.querySelectorAll(".dt-button");
        btns.forEach(function (btn) {
            btn.classList.add("btn", "btn-primary-500", "btn-sm");
            btn.classList.remove("dt-button");
        });
    },
    layout: {
        topEnd: [],
        bottomStart: {
          div: {
            html: `
                    <div class="text-end mb-4 justify-content-end">
                    <button id="saveAll" class="btn btn-primary-500 text-sm btn-sm px-12 py-12 radius-8 d-flex align-items-center gap-2 mb-6" >
                    <iconify-icon icon="la:save-solid" class="icon text-xl line-height-1"></iconify-icon>
                    Simpan
                    </button>
                    </div>
                  `
          }
        },
        topStart: {
            div: {
                html: `<button type="button" class="btn btn-primary-500 text-sm btn-sm px-12 py-12 radius-8 d-flex align-items-center gap-2 mb-6" data-bs-toggle="modal" data-bs-target="#addModal"><iconify-icon icon="ic:baseline-plus" class="icon text-xl line-height-1"></iconify-icon>Tambah Produk</button`
            }
        }
    },
    responsive: true
  });

  // 3. Keranjang & Render tabel
  const cart = [];
  const tbody = document.querySelector('#dataTable tbody');
  const footerTotal = document.getElementById('footer-total');

  function renderCart() {
    tbody.innerHTML = '';
    let sum = 0;
    cart.forEach((item,i) => {
      const sub = item.price * item.qty;
      sum += sub;
      tbody.insertAdjacentHTML('beforeend', `
        <tr data-index="${i}">
          <td class="text-center">${item.name}</td>
          <td class="text-center">Rp${item.price.toLocaleString()}</td>
          <td class="text-center">
            <input type="number" class="qty-input form-control form-control-sm text-center"
                   data-index="${i}" value="${item.qty}" min="1">
          </td>
          <td class="text-center">Rp${sub.toLocaleString()}</td>
          <td class="text-center">
            <button class="btn btn-sm btn-danger btn-remove" data-index="${i}">×</button>
          </td>
        </tr>`);
    });
    footerTotal.textContent = 'Rp'+ sum.toLocaleString();

    // bind events
    document.querySelectorAll('.qty-input').forEach(el=>{
      el.oninput = ()=> {
        cart[el.dataset.index].qty = parseInt(el.value) || 1;
        renderCart();
      };
    });
    document.querySelectorAll('.btn-remove').forEach(el=>{
      el.onclick = ()=> {
        cart.splice(el.dataset.index,1);
        renderCart();
      };
    });
  }

  // 4. Modal Add logic
  const prodSelect = document.getElementById('id_product');
  const priceIn   = document.getElementById('price');
  const qtyIn     = document.getElementById('quantity');
  const totalIn   = document.getElementById('total');

  function updateTotal() {
    totalIn.value = (parseFloat(priceIn.value)||0) * (parseInt(qtyIn.value)||0);
  }
  prodSelect.onchange = () => {
    const opt = prodSelect.selectedOptions[0];
    priceIn.value = opt.dataset.price || 0;
    qtyIn.value = 1;
    updateTotal();
  };
  qtyIn.oninput = updateTotal;

  window.addToCart = function() {
    const opt = prodSelect.selectedOptions[0];
    if (!opt) return false;
    cart.push({
      product_id: opt.value,
      name: opt.text,
      price: parseFloat(opt.dataset.price) || 0,
      qty: parseInt(qtyIn.value) || 1
    });
    renderCart();
    bootstrap.Modal.getInstance(document.getElementById('addModal')).hide();
    return false;
  };

  // 5. Simpan keranjang
  document.getElementById('saveAll').onclick = () => {
    const selectedCustomer = $('#customerSelect').val();
    if (!selectedCustomer) {
      alert('Pilih pelanggan terlebih dahulu!');
      return;
    }
    if (cart.length === 0) {
      alert('Tambah minimal satu produk!');
      return;
    }
    document.getElementById('cartCustomer').value = selectedCustomer;
    const container = document.getElementById('cartItemsInput');
    container.innerHTML = '';
    cart.forEach((item,i) => {
      container.insertAdjacentHTML('beforeend', `
        <input type="hidden" name="items[${i}][product_id]" value="${item.product_id}">
        <input type="hidden" name="items[${i}][price]"      value="${item.price}">
        <input type="hidden" name="items[${i}][quantity]"   value="${item.qty}">
      `);
    });
    document.getElementById('cartForm').submit();
  };
});
</script>
@endpush







