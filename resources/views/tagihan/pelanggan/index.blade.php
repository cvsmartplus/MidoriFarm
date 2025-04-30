@extends('layout.layout')
@php
    $title='Tagihan Pelanggan';
    $subTitle = 'Tagihan - Pelanggan';
    $script = '<script>
                    let table = new DataTable("#dataTable");
               </script>';
@endphp

@section('content')
<div class="card h-100 p-0 radius-12">
    <div class="card-body">
        <div class="table-responsive scroll-sm">
            <table class="table bordered-table sm-table mb-0" id="dataTable" cellspacing="0">
                <thead>
                    <tr>
                        <th scope="col" class="text-center">Barcode</th>
                        <th scope="col" class="text-center">Nama Peminjam</th>
                        <th scope="col" class="text-center">Tanggal Hutang</th>
                        <th scope="col" class="text-center">Jatuh Tempo</th>
                        <th scope="col" class="text-center">Jumlah</th>
                        <th scope="col" class="text-center">Status</th>
                        <th scope="col" class="text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody id="table">
                    @foreach($tagihanpelanggan as $key => $tagihan)
                    <tr>
                        <td class="text-center">{{$key + 1 }}</td>
                        <td class="text-center">{{$tagihan->customer->name}}</td>
                        <td class="text-center">{{$tagihan->date}}</td>
                        <td class="text-center">{{$tagihan->due_date}}</td>
                        <td class="text-center">{{format_uang($tagihan->amount)}}</td>
                        <td class="text-center">{{$tagihan->status}}</td>
                        <td class="text-center">
                            <div class="d-flex align-items-center gap-10 justify-content-center">
                                <button type="button"
                                    class="bg-success-focus text-success-600 bg-hover-success-200 fw-medium w-40-px h-40-px d-flex justify-content-center align-items-center rounded-circle"
                                    data-bs-toggle="modal" data-bs-target="#editModal{{$tagihan->id}}">
                                    <iconify-icon icon="lucide:edit" class="menu-icon"></iconify-icon>
                                </button>
                                <button type="button"
                                    class="bg-danger-focus bg-hover-danger-200 text-danger-600 fw-medium w-40-px h-40-px d-flex justify-content-center align-items-center rounded-circle"
                                    data-bs-toggle="modal" data-bs-target="#deleteModal{{$tagihan->id}}">
                                    <iconify-icon icon="fluent:delete-24-regular" class="menu-icon"></iconify-icon>
                                </button>
                            </div>
                        </td>
                    </tr>

                    <!-- Modal Update -->
                    <div class="modal fade" id="editModal{{$tagihan->id}}" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="editModalLabel">Update Tagihan Pelangan</h1>
                                </div>
                                <div class="modal-body p-24">
                                    <form action=""></form>
                                    <form action="{{ routeByRole('admin.tagihanPelanggan.update','owner.tagihanPelanggan.update', null, null, ['pelanggan' => $tagihan->id]) }}" method="POST">
                                        @csrf
                                        @method('PUT')
                                        <div class="row">
                                            <div class="col-12">
                                                <label class="form-label">Nama Peminjam</label>
                                                <select id="id_customer" name="id_customer" class="form-control radius-8 form-select" required>
                                                    @foreach ($pelanggan as $item)
                                                        <option value="{{ $item->id }}" {{ $item->id == $tagihan->id_customer ? 'selected' : '' }}>
                                                            {{ $item->name }}
                                                        </option>
                                                    @endforeach
                                                    </select>
                                            </div>
                                            <div class="col-12">
                                                <label class="form-label">Tanggal Hutang</label>
                                                <input type="date" id="date" name="date" class="form-control"
                                                    value="{{$tagihan->date}}" placeholder="Tanggal Hutang" required>
                                            </div>
                                            <div class="col-12">
                                                <label class="form-label">Jatuh Tempo</label>
                                                <input type="date" id="due_date" name="due_date" class="form-control"
                                                    value="{{$tagihan->due_date}}" placeholder="Jatuh Tempo" required>
                                            </div>
                                            <div class="col-12">
                                                <label class="form-label">Jumlah</label>
                                                <input type="number" id="amount" name="amount" class="form-control"
                                                    value="{{$tagihan->amount}}" placeholder="Jumlah" required>
                                            </div>
                                            <div class="col-12">
                                                <label class="form-label">Status</label>
                                                <select name="status" class="form-control radius-8 form-select" required>
                                                    <option value="Lunas" {{ $tagihan->status == 'Lunas' ? 'selected' : '' }}>Lunas</option>
                                                    <option value="Belum Lunas" {{ $tagihan->status == 'Belum Lunas' ? 'selected' : '' }}>Belum Lunas</option>
                                                    <option value="Tenggat Waktu" {{ $tagihan->status == 'Tenggat Waktu' ? 'selected' : '' }}>Tenggat Waktu</option>
                                                </select>
                                            </div>
                                            <div class="d-flex align-items-center justify-content-center gap-3 mt-24">
                                                <button type="reset" class="border border-danger-600 bg-hover-danger-200 text-danger-600 text-md px-40 py-11 radius-8" data-bs-dismiss="modal">
                                                    Cancel
                                                </button>
                                                <button type="submit" class="btn btn-primary-500 text-md px-48 py-12 radius-8">
                                                    Save
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Modal Update -->


                    <!-- Modal Warning-->
                    <div class="modal fade" id="deleteModal{{$tagihan->id}}" data-bs-backdrop="static"
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
                                    <form action="{{ routeByRole('admin.tagihanPelanggan.destroy','owner.tagihanPelanggan.destroy'  , null, null, ['pelanggan' => $tagihan->id]) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
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
                <h1 class="modal-title fs-5" id="addModalLabel">Tambah Peminjam</h1>
            </div>
            <div class="modal-body p-24">
                <form action="{{ routeByRole('admin.tagihanPelanggan.store', 'owner.tagihanPelanggan.store', null, null) }}" method="POST" class="needs-validation" novalidate>
                    @csrf
                    <div class="row">
                        <div class="col-12">
                            <select id="id_customer" name="id_customer" class="form-control radius-8 form-select" required>
                                <option value="" disabled selected>Pilih Peminjam</option>
                                @foreach ($pelanggan as $item)
                                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-12">
                            <label class="form-label">Tanggal Hutang</label>
                            <input type="date" id="date" name="date" class="form-control"
                                placeholder="Tanggal Hutang" required>
                        </div>
                        <div class="col-12">
                            <label class="form-label">Jatuh Tempo</label>
                            <input type="date" id="due_date" name="due_date" class="form-control"
                                placeholder="Jatuh Tempo" required>
                        </div>
                        <div class="col-12">
                            <label class="form-label">Jumlah</label>
                            <input type="number" id="amount" name="amount" class="form-control"
                                placeholder="Masukkan Jumlah Tagihan" required>
                        </div>
                        <div class="col-12">
                            <label class="form-label">Status</label>
                            <select name="status" class="form-control radius-8 form-select" required>
                                <option value="Lunas">Lunas</option>
                                <option value="Belum Lunas" selected>Belum Lunas</option>
                                <option value="Tenggat Waktu">Tenggat Waktu</option>
                            </select>
                        </div>
                        <div class="d-flex align-items-center justify-content-center gap-3 mt-24">
                            <button type="reset" class="border border-danger-600 bg-hover-danger-200 text-danger-600 text-md px-40 py-11 radius-8" data-bs-dismiss="modal">
                                Cancel
                            </button>
                            <button type="submit" class="btn btn-primary-500 text-md px-48 py-12 radius-8">
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




@endsection

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function () {
        var table = $('#dataTable');

    // Check if table is already initialized
    if ($.fn.dataTable.isDataTable(table)) {
        table.DataTable().destroy(); // Destroy the previous instance
    }
        new DataTable("#dataTable", {
            paging: true,
            autoWidth: true,
            fixedHeader: false,
            buttons: ["excelHtml5", "csvHtml5", "pdfHtml5", "print"],
            initComplete: function () {
                var btns = document.querySelectorAll(".dt-button");
                btns.forEach(function (btn) {
                    btn.classList.add("btn", "btn-success", "btn-sm");
                    btn.classList.remove("dt-button");
                });
            },
            layout: {
                topStart: ["search", "buttons"],
                topEnd: {
                    div: {
                        html: '<button type="button" class="btn btn-primary-500 text-sm btn-sm px-12 py-12 radius-8 d-flex align-items-center gap-2 mb-6" data-bs-toggle="modal" data-bs-target="#addModal"><iconify-icon icon="ic:baseline-plus" class="icon text-xl line-height-1"></iconify-icon>Tambah Produk</button>'
                    }
                }
            },
            responsive: true
        });
    });
</script>

@endpush
