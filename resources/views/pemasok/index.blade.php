@extends('layout.layout')
@php
    $title = 'Daftar Pelanggan';
    $subTitle = 'Pelanggan & Pemasok - Pelanggan';
@endphp

@section('content')
<div class="card h-100 p-0 radius-12">
    <div class="card-body">
        <div class="table-responsive scroll-sm">
            <table class="table bordered-table sm-table mb-0" id="dataTable" cellspacing="0">
                <thead>
                    <tr>
                        <th scope="col" class="text-center">Barcode</th>
                        <th scope="col" class="text-center">Nama Pemasok</th>
                        <th scope="col" class="text-center">Email</th>
                        <th scope="col" class="text-center">Alamat</th>
                        <th scope="col" class="text-center">No.Telp</th>
                        <th scope="col" class="text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody id="table">
                    @foreach($pemasok as $i => $item)
                    <tr>
                        <td class="text-center">{{ $item->id }}</td>
                        <td class="text-center">{{ $item->name }}</td>
                        <td class="text-center">{{ $item->email }}</td>
                        <td class="text-center">{{ $item->address }}</td>
                        <td class="text-center">{{ $item->phone_number }}</td>
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
                                    <h1 class="modal-title fs-5" id="editModalLabel">Edit Pemasok</h1>
                                </div>
                                <div class="modal-body p-24">
                                    <form></form>
                                    <form action="{{ routeByRole('admin.pemasok.update', 'owner.pemasok.update', null, null, ['pemasok' => $item->id]) }}" method="POST">
                                        @csrf
                                        @method('PUT')
                                        <div class="row">
                                            <div class="col-12">
                                                <label class="form-label">Nama Pemasok</label>
                                                <input type="text" name="name" class="form-control" value="{{ $item->name }}" required>
                                            </div>
                                            <div class="col-12">
                                                <label class="form-label">Email</label>
                                                <input type="text" name="email" class="form-control" value="{{ $item->email }}" required>
                                            </div>
                                            <div class="col-12">
                                                <label class="form-label">Alamat</label>
                                                <input type="text" name="address" class="form-control" value="{{ $item->address }}" required>
                                            </div>
                                            <div class="col-12">
                                                <label class="form-label">No. Telp</label>
                                                <input type="text" name="phone_number" class="form-control" value="{{ $item->phone_number }}" required>
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
                    <div class="modal fade" id="deleteModal{{ $item->id }}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="staticBackdropLabel">Peringatan</h5>
                                </div>
                                <div class="modal-body">
                                    Apakah anda yakin data ingin dihapus?
                                </div>
                                <div class="modal-footer">
                                    <form></form>
                                    <form action="{{ routeByRole('admin.pemasok.destroy', 'owner.pemasok.destroy', null, null, ['pemasok' => $item->id]) }}" method="POST">
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
        </div>
    </div>
</div>

<!-- Modal Add -->
<div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="addModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="addModalLabel">Tambah Pemasok</h1>
            </div>
            <div class="modal-body p-24">
                <form action=""></form>
                <form action="{{ routeByRole('admin.pemasok.store', 'owner.pemasok.store', null, null,) }}" method="POST" class="needs-validation" novalidate>
                    @csrf
                    @method('post')
                    <div class="row">
                        <div class="col-12">
                            <label class="form-label">Nama Pemasok</label>
                            <input type="text" name="name" class="form-control" placeholder="Masukkan Nama Pemasok" required>
                        </div>
                        <div class="col-12">
                            <label class="form-label">Email</label>
                            <input type="email" name="email" class="form-control" placeholder="Masukkan Email" required>
                        </div>
                        <div class="col-12">
                            <label class="form-label">Alamat</label>
                            <input type="text" name="address" class="form-control" placeholder="Masukkan Alamat" required>
                        </div>
                        <div class="col-12">
                            <label class="form-label">No. Telp</label>
                            <input type="text" name="phone_number" class="form-control" placeholder="Masukkan Nomor Telepon" required>
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
<!-- Modal Add End -->
@endsection

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function () {
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
                        html: '<button type="button" class="btn btn-primary-500 text-sm btn-sm px-12 py-12 radius-8 d-flex align-items-center gap-2 mb-6" data-bs-toggle="modal" data-bs-target="#addModal"><iconify-icon icon="ic:baseline-plus" class="icon text-xl line-height-1"></iconify-icon>Tambah Pemasok</button>'
                    }
                }
            },
            responsive: true
        });
    });
</script>
@endpush
