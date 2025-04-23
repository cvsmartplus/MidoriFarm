@extends('layout.layout')
@php
$title='Pengeluaran';
$subTitle = 'Pengeluaran';
$script = '';
@endphp

@section('content')

<div class="card h-100 p-0 radius-12">
    <div class="card-body">
        <div class="table-responsive scroll-sm">
            <table class="table bordered-table sm-table mb-0" id="dataTable" cellspacing="0">
                <thead>
                    <tr>
                        <th scope="col" class="text-center">No.</th>
                        <th scope="col" class="text-center">date</th>
                        <th scope="col" class="text-center">Kategori</th>
                        <th scope="col" class="text-center">Deskripsi</th>
                        <th scope="col" class="text-center">Nominal</th>
                        <th scope="col" class="text-center">Supplier</th>
                        <th scope="col" class="text-center">Kasir</th>
                        <th scope="col" class="text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody id="table">
                    @foreach($pengeluaran as $i => $peng)
                    <tr>
                        <td class="text-center">{{$i + 1}}</td>
                        <td class="text-center">{{tanggal_indonesia($peng->created_at)}}</td>
                        <td class="text-center">{{$peng->kategori->name_category}}</td>
                        <td class="text-center">{{$peng->description}}</td>
                        <td class="text-center">Rp. {{format_uang($peng->subtotal)}}</td>
                        <td class="text-center">{{$peng->pemasok->name}}</td>
                        <td class="text-center">{{$peng->user->name}}</td>
                        <td class="text-center">
                            <div class="d-flex align-items-center gap-10 justify-content-center">
                                <button type="button"
                                    class="bg-danger-focus bg-hover-danger-200 text-danger-600 fw-medium w-40-px h-40-px d-flex justify-content-center align-items-center rounded-circle"
                                    data-bs-toggle="modal" data-bs-target="#deleteModal{{$peng->id}}">
                                    <iconify-icon icon="fluent:delete-24-regular" class="menu-icon"></iconify-icon>
                                </button>
                            </div>
                        </td>
                    </tr>

                    <!-- Modal Warning-->
                    <div class="modal fade" id="deleteModal{{$peng->id}}" data-bs-backdrop="static"
                        data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="staticBackdropLabel">Peringatan</h5>
                                </div>
                                <div class="modal-body">
                                    Apakah anda yakin data ingin dihapus?
                                </div>
                                <div class="modal-footer">
                                    <form action="{{ routeByRole('admin.pengeluaranKelola.destroy', 'owner.pengeluaranKelola.destroy', null, 'akuntan.pengeluaranKelola.destroy', ['id' => $peng->id]) }}" method="post">
                                        @csrf
                                        @method('delete')
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Tidak</button>
                                        <button type="submit" class="btn btn-danger">Iya</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Modal Warning End-->
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- Modal Add -->
<div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="addModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="addModalLabel">Tambah Produk</h1>
            </div>
            <div class="modal-body p-24">
                <form action="{{ routeByRole('admin.pengeluaranKelola.store', 'owner.pengeluaranKelola.store', null, 'akuntan.pengeluaranKelola.store') }}" method="post" class="needs-validation" novalidate>
                    @csrf
                    @method('post')
                    <div class="row">
                        <div class="col-12">
                            <label class="form-label">Tanggal</label>
                            <input type="date" id="date" name="date" class="form-control"
                                placeholder="Masukkan Keterangan Pengeluaran" required>
                        </div>
                        <div class="col-12">
                            <label class="form-label">Kategori</label>
                            <select id="kategori" name="kategori" class="form-control radius-8 form-select" required>
                                @foreach ($kategori as $key => $item)
                                <option value="{{$item->id}}">{{$item->name_category}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-12" id="input-keterangan" style="display: block;">
                            <label class="form-label">Keterangan</label>
                            <input type="text" id="keterangan" name="keterangan" class="form-control"
                                placeholder="Masukkan Keterangan Pengeluaran">
                        </div>
                        <div class="col-12" id="input-aset" style="display: none;">
                            <label class="form-label">Kode Aset</label>
                            <div class="input-group">
                                <input type="text" id="id_aset" name="id_aset" class="form-control w-25S"
                                    placeholder="Masukkan Kode Aset">
                                <button type="button" class="btn btn-info text-white" data-bs-toggle="modal"
                                    onclick="openProdukModal()">
                                    Cari barang
                                </button>
                            </div>
                        </div>

                        <div class="col-6" id="input-nama" style="display: none;">
                            <label class="form-label">Nama Barang</label>
                            <input type="text" id="nama" name="name_product" class="form-control" placeholder="Nama Barang"
                                readonly>
                        </div>
                        <div class="col-6" id="input-harga" style="display: none;">
                            <label class="form-label">Harga</label>
                            <input type="number" id="harga" name="price" class="form-control" placeholder="Harga Barang"
                                readonly>
                        </div>

                        <div class="col-12" id="input-qty" style="display: none;">
                            <label class="form-label">Quantity</label>
                            <input type="number" id="qty" name="qty" class="form-control"
                                placeholder="Masukkan Quantity Barang">
                        </div>
                        <div class="col-12">
                            <label class="form-label">Jumlah Nominal</label>
                            <input type="number" id="input-nominal" name="jumlah" class="form-control"
                                placeholder="Masukkan Nominal Pengeluaran" required>
                        </div>
                        <div class="col-12">
                            <label class="form-label">Pemasok</label>
                            <select id="id_supplier" name="id_supplier" class="form-control radius-8 form-select"
                                required>
                                @foreach ($pemasok as $key => $item)
                                <option value="{{$key +1}}">{{$item->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="d-flex align-items-center justify-content-center gap-3 mt-24">
                            <button type="reset"
                                class="border border-danger-600 bg-hover-danger-200 text-danger-600 text-md px-40 py-11 radius-8"
                                data-bs-dismiss="modal">
                                Cancel
                            </button>
                            <button type="submit"
                                class="btn btn-primary border border-primary-600 text-md px-48 py-12 radius-8">
                                Save
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Modal Add -->

<!-- Modal Produk -->
<div class="modal fade" id="produkModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Cari Barang</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="table-responsive scroll-sm">
                    <table class="table bordered-table mb-0" id="dataTable" cellspacing="0">
                        <thead>
                            <tr>
                                <th scope="col" class="text-center">No.</th>
                                <th scope="col" class="text-center">Kode</th>
                                <th scope="col" class="text-center">Nama</th>
                                <th scope="col" class="text-center">Harga</th>
                                <th scope="col" class="text-center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody id="table">
                            @foreach($asset as $i => $asset)
                            <tr>
                                <td class="text-center">{{$i + 1}}</td>
                                <td class="text-center">{{$asset->id}}</td>
                                <td class="text-center">{{$asset->name_product}}</td>
                                <td class="text-center">{{format_uang($asset->price)}}</td>
                                <td class="text-center">
                                    <div class="d-flex align-items-center gap-10 justify-content-center">
                                        <button type="button"
                                            class="bg-success-focus text-success-600 bg-hover-success-200 fw-medium w-40-px h-40-px d-flex justify-content-center align-items-center rounded-circle"
                                            data-bs-toggle="modal"
                                            onclick="pilihProduk('{{ $asset->id}}', '{{ $asset->price}}', '{{ $asset->name_product}}')"
                                            data-bs-dismiss="modal">
                                            <iconify-icon icon="icon-park-solid:correct" class="menu-icon">
                                            </iconify-icon>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Modal Produk End -->

@endsection

@push('scripts')
<script>
    $(document).ready(function () {

        const kategoriSelect = document.getElementById('kategori');

        kategoriSelect.addEventListener('change', function () {
            const selectedOption = this.options[this.selectedIndex];
            const selectedText = selectedOption.text.toLowerCase();
            if (selectedText == 'aset') {
                // Sembunyikan input keterangan & nominal
                document.getElementById('input-keterangan').style.display = 'none';
                document.getElementById('input-nominal').readOnly = true;
                document.getElementById('input-aset').style.display = 'block';
                document.getElementById('input-qty').style.display = 'block';
                document.getElementById('input-harga').style.display = 'block';
                document.getElementById('input-nama').style.display = 'block';
            } else {
                // Tampilkan input normal
                document.getElementById('input-keterangan').style.display = 'block';
                document.getElementById('input-nominal').readOnly = false;
                document.getElementById('input-aset').style.display = 'none';
                document.getElementById('input-qty').style.display = 'none';
                document.getElementById('input-harga').style.display = 'none';
                document.getElementById('input-nama').style.display = 'none';
            }
        });

        $(document).on("input", "#qty", function () {
            let harga = $('#harga').val() || 0;
            let qty = $(this).val() || 0;

            $('#input-nominal').val(qty * harga);
            console.log($('#input-nominal').val());
        });
    });

    new DataTable('#dataTable', {
        paging: true, // Aktifkan pagination
        autoWidth: true, // Sesuaikan lebar kolom secara otomatis
        fixedHeader: false, // Nonaktifkan fixed header

        buttons: ['excelHtml5', 'csvHtml5', 'pdfHtml5', 'print', ],
        initComplete: function () {
            var btns = $('.dt-button');
            btns.addClass('btn btn-success btn-sm');
            btns.removeClass('dt-button');

        },
        layout: {
            topStart: ['search', 'buttons'],
            topEnd: {
                div: {
                    html: '<button type="button" class="btn btn-primary-500 text-sm btn-sm px-12 py-12 radius-8 d-flex align-items-center mb-8 gap-2" data-bs-toggle="modal" data-bs-target="#addModal"><iconify-icon icon="ic:baseline-plus" class="icon text-xl line-height-1"></iconify-icon>Tambah Pengeluaran</button>'
                }
            }
        },
        responsive: true

    });

    function openProdukModal() {
        let myModal = new
        bootstrap.Modal(document.getElementById('produkModal'), {});
        myModal.show();
    }

    function pilihProduk(id, harga, nama) {
        $('#id_aset').val(id);
        $('#harga').val(harga);
        $('#nama').val(nama);
        $('#addModal').modal('show')
    }

</script>
@endpush
