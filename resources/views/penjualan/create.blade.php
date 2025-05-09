@extends('layout.layout')
@php
    $title = 'Penjualan';
    $subTitle = 'Penjualan';
@endphp

@section('content')
<div class="card h-100 p-0 radius-12">
    <div class="card-body">
        <div class="table-responsive scroll-sm">
            <table class="table bordered-table sm-table mb-0" id="dataTable" cellspacing="0">
                <thead>
                    <tr>
                        <th class="text-center">Produk</th>
                        <th class="text-center">Harga per-kilo</th>
                        <th class="text-center">Kuantitas</th>
                        <th class="text-center">Total</th>
                        <th class="text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($penjualan as $i => $item)
                    <tr>
                        <td class="text-center">{{ $item->produk->name_product }}</td>
                        <td class="text-center">{{ $item->price }}</td>
                        <td class="text-center">{{ $item->quantity }}</td>
                        <td class="text-center">Rp{{ number_format($item->subtotal, 0, ',', '.') }}</td>
                        <td class="text-center">
                            <div class="d-flex align-items-center gap-10 justify-content-center">
                                <button type="button" class="bg-success-focus text-success-600 bg-hover-success-200 fw-medium w-40-px h-40-px d-flex justify-content-center align-items-center rounded-circle" data-bs-toggle="modal" data-bs-target="#editModal{{ $item->id }}">
                                    <iconify-icon icon="lucide:edit" class="menu-icon"></iconify-icon>
                                </button>
                                <button type="button" class="bg-danger-focus bg-hover-danger-200 text-danger-600 fw-medium w-40-px h-40-px d-flex justify-content-center align-items-center rounded-circle" data-bs-toggle="modal" data-bs-target="#deleteModal{{ $item->id }}">
                                    <iconify-icon icon="fluent:delete-24-regular" class="menu-icon"></iconify-icon>
                                </button>
                            </div>
                        </td>
                    </tr>

                    <!-- Modal Edit -->
                    <div class="modal fade" id="editModal{{ $item->id }}" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="editModalLabel">Edit Penjualan</h1>
                                </div>
                                <div class="modal-body p-24">
                                    <form action="{{ routeByRole('admin.penjualan.update', 'owner.penjualan.update', null, 'akuntan.penjualan.update', ['penjualan' => $item->id]) }}" method="POST">
                                        @csrf
                                        @method('PUT')
                                        <div class="row">
                                            <div class="col-12">
                                                <label class="form-label">Produk</label>
                                                <select name="id_product" class="form-control radius-8 form-select" required>
                                                    @foreach ($produk as $key => $namaProduk)
                                                        <option value="{{ $key }}" {{ $item->id_product == $key ? 'selected' : '' }}>
                                                            {{ $namaProduk }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="col-12">
                                                <label class="form-label">Harga per-kilo</label>
                                                <input type="text" name="price" class="form-control" value="{{ $item->price }}" required>
                                            </div>
                                            <div class="col-12">
                                                <label class="form-label">Kuantitas</label>
                                                <input type="text" name="quantity" class="form-control" value="{{ $item->quantity }}" required>
                                            </div>
                                            <div class="col-12">
                                                <label class="form-label">Total</label>
                                                <input type="text" name="subtotal" class="form-control" value="{{ $item->subtotal }}" required>
                                            </div>
                                            <div class="d-flex justify-content-end gap-3 mt-3">
                                                <button type="reset" class="btn btn-outline-danger" data-bs-dismiss="modal">Batal</button>
                                                <button type="submit" class="btn btn-primary">Simpan</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Modal Delete -->
                    <div class="modal fade" id="deleteModal{{ $item->id }}" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Peringatan</h5>
                                </div>
                                <div class="modal-body">
                                    Apakah anda yakin ingin menghapus data ini?
                                </div>
                                <div class="modal-footer">
                                    <form action="{{ routeByRole('admin.penjualan.destroy', 'owner.penjualan.destroy', null, 'akuntan.penjualan.destroy', ['penjualan' => $item->id]) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tidak</button>
                                        <button type="submit" class="btn btn-danger">Iya</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </tbody>
            </table>
            <tfoot>
                <tr>
                    <td colspan="5" class="text-end pt-3">
                        <button type="button"
                            class="btn d-flex justify-content-center align-items-center px-4 py-2 shadow fw-semibold text-white ms-auto"
                            style="background-color: #8da9f1; border: none; font-size: 1rem; height: 48px; min-width: 160px; border-radius: 12px;">
                            <iconify-icon icon="fluent:checkmark-square-24-regular" class="me-2" style="font-size: 20px;"></iconify-icon>
                            Simpan
                        </button>
                    </td>
                </tr>
            </tfoot>
        </div>
    </div>
</div>


<!-- Modal Add -->
<div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="addModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="addModalLabel">Tambah Penjualan</h1>
            </div>
            <div class="modal-body p-24">
                <form action="{{ routeByRole('admin.penjualan.store', 'owner.penjualan.store', null, 'akuntan.penjualan.store') }}" method="POST" class="needs-validation" novalidate>
                    @csrf
                    <div class="row">
                        <div class="col-12">
                            <label class="form-label">Produk</label>
                            <select name="id_product" class="form-control radius-8 form-select" required>
                                @foreach ($produk as $key => $namaProduk)
                                    <option value="{{ $key }}">{{ $namaProduk }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-12">
                            <label class="form-label">Harga per-kilo</label>
                            <input type="text" name="price" class="form-control" required>
                        </div>
                        <div class="col-12">
                            <label class="form-label">Kuantitas</label>
                            <input type="text" name="quantity" class="form-control" required>
                        </div>
                        <div class="col-12">
                            <label class="form-label">Total</label>
                            <input type="text" name="subtotal" class="form-control" required>
                        </div>
                        <div class="d-flex justify-content-center gap-3 mt-4">
                            <button type="reset" class="btn btn-outline-danger" data-bs-dismiss="modal">Batal</button>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Modal Add End -->
@endsection

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function () {
        new DataTable("#dataTable", {
            paging: false,
            autoWidth: true,
            fixedHeader: false,
            initComplete: function () {
                var btns = document.querySelectorAll(".dt-button");
                btns.forEach(function (btn) {
                    btn.classList.add("btn", "btn-success", "btn-sm");
                    btn.classList.remove("dt-button");
                });
            },
           layout: {
                topStart: {
                    div: {
                        html: `
                            <div style="position: relative; display: inline-block; margin-right: 16px; margin-bottom: 16px;">
                                <input type="search" id="customSearch" class="form-control"
                                    placeholder="Cari Produk"
                                    style="width: 250px; height: 40px; border-radius: 8px; padding-left: 36px;">
                                <iconify-icon icon="mingcute:search-line"
                                    style="position: absolute; left: 10px; top: 50%; transform: translateY(-50%); font-size: 18px; color: #888;">
                                </iconify-icon>
                            </div>
                        `
                    }
                },
                topEnd: {
                    div: {
                        html: `
                            <input type="date" id="tanggalInput" class="form-control"
                                style="width: 250px; height: 40px; border-radius: 8px; margin-left: 16px; margin-bottom: 16px;">
                        `
                    }
                }
            },
            language: {
                search: "",
            },
            responsive: true
        });

        const table = $('#dataTable').DataTable();
        document.getElementById("customSearch").addEventListener("keyup", function () {
            table.search(this.value).draw();
        });
    });
</script>
@endpush
