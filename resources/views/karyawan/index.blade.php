@extends('layout.layout')
@php
    $title='Peran & Akses';
    $subTitle = 'Peran & Akses';
    $script = '<script>
                    $(".remove-item-btn").on("click", function() {
                        $(this).closest("tr").addClass("d-none")
                    });
               </script>';
@endphp
<!-- mengidentifikasi atau mengedit si  user posisi nya sebagai apa -->

@section('content')
{{-- Modal untuk nampilkan password --}}
@if(session('plain_password'))
<div class="modal fade" id="pwModal" tabindex="-1">
    <div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
        <h6 class="modal-title">Password Karyawan Baru</h6>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
        </div>
        <div class="modal-body">
        <p>Berikut password untuk karyawan:</p>
        <pre class="fw-bold fs-4">{{ session('plain_password') }}</pre>
        <small class="text-muted fw-bold">Password ini hanya tampil sekali. Segera catat atau kirim ke karyawan.</small>
        </div>
        <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Ok</button>
        </div>
    </div>
    </div>
</div>
@endif

@if (session('success'))
    <div class="alert alert-success alert-block">
    <button type="button" class="close" data-dismiss="alert">X</button>
        <strong>{{ session('success') }}</strong>
    </div>
@endif

@if (session('error'))
    <div class="alert alert-danger alert-block">
    <button type="button" class="close" data-dismiss="alert">X</button>
        <strong>{{ session('error') }}</strong>
    </div>
@endif

<div class="card h-100 p-0 radius-12">
    <div class="card-body">
        <div class="table-responsive scroll-sm">
            <table class="table bordered-table sm-table mb-0" id="dataTable" cellspacing="0">
                <thead>
                    <tr>
                        <th scope="col" class="text-center">Nama Karyawan</th>
                        <th scope="col" class="text-center">Email</th>
                        <th scope="col" class="text-center">Peran</th>
                        <th scope="col" class="text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody id="table">
                    @foreach($user as $i => $item)
                    <tr>
                        <td class="text-center">{{ $item->name }}</td>
                        <td class="text-center">{{ $item->email }}</td>
                        <td class="text-center">{{ $item->role }}</td>
                        <td class="text-center">
                            <div class="d-flex align-items-center gap-10 justify-content-center">
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
                                    <h1 class="modal-title fs-5" id="editModalLabel">Edit Peran</h1>
                                </div>
                                <div class="modal-body p-24">
                                    <form></form>
                                    <form action="{{ routeByRole('admin.karyawan.update', 'owner.karyawan.update', null, null, ['karyawan' => $item->id]) }}" method="POST">
                                        @csrf
                                        @method('PUT')
                                        <div class="row">
                                            <div class="col-12">
                                                <label class="form-label">Nama Pelanggan</label>
                                                <input type="text" name="name" class="form-control" value="{{ $item->name }}" required>
                                            </div>
                                            <div class="col-12">
                                                <label class="form-label">Email</label>
                                                <input type="text" name="email" class="form-control" value="{{ $item->email }}" required>
                                            </div>
                                            <div class="col-12">
                                                <label class="form-label">Password</label>
                                                <input type="text" name="password" class="form-control" value="{{ $item->password }}" required>
                                            </div>
                                            <div class="col-12">
                                                <label class="form-label">Peran</label>
                                                <select name="role" class="form-control radius-8 form-select" required>
                                                    <option value="admin" {{ $item->role == 'admin' ? 'selected' : '' }}>admin</option>
                                                    <option value="owner" {{ $item->role == 'owner' ? 'selected' : '' }}>owner</option>
                                                    <option value="akuntan" {{ $item->role == 'akuntan' ? 'selected' : '' }}>akuntan</option>
                                                    <option value="petani" {{ $item->role == 'petani' ? 'selected' : '' }}>petani</option>
                                                </select>
                                            </div>
                                            <div class="d-flex justify-content-end gap-3 mt-3">
                                                <button type="reset" class="btn btn-outline-danger" data-bs-dismiss="modal">Batal</button>
                                                <button type="submit" class="btn btn-primary-500">Simpan</button>
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
                                    <form action="{{ routeByRole('admin.karyawan.destroy', 'owner.karyawan.destroy', null, null, ['karyawan' => $item->id]) }}" method="POST">
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
                <h1 class="modal-title fs-5" id="addModalLabel">Tambah Peran</h1>
            </div>
            <div class="modal-body p-24">
                <form action=""></form>
                <form action="{{ routeByRole('admin.karyawan.store', 'owner.karyawan.store', null, null,) }}" method="POST" class="needs-validation" novalidate>
                    @csrf
                    @method('post')
                    <div class="row">
                        <div class="col-12">
                            <label class="form-label">Nama Karyawan</label>
                            <input type="text" name="name" class="form-control" value="" placeholder="Nama" required>
                        </div>
                        <div class="col-12">
                            <label class="form-label">Email</label>
                            <input type="text" name="email" class="form-control" value="" placeholder="Email" required>
                        </div>
                        <div class="col-12">
                            <label class="form-label">Password</label>
                            <input type="text" name="password" class="form-control" value="" placeholder="Password" required>
                        </div>
                        <div class="col-12">
                        <label class="form-label">Peran</label>
                            <select name="role" class="form-control radius-8 form-select" required>
                                <option disabled>Pilih Peran Karyawan</option>
                                <option value="admin" {{ old('role') == 'admin' ? 'selected' : '' }}>Admin</option>
                                <option value="owner" {{ old('role') == 'owner' ? 'selected' : '' }}>Owner</option>
                                <option value="akuntan" {{ old('role') == 'akuntan' ? 'selected' : '' }}>Akuntan</option>
                                <option value="petani" {{ old('role') == 'petani' ? 'selected' : '' }}>Petani</option>
                            </select>
                        </div>
                    </div>
                    <div class="d-flex align-items-center justify-content-center gap-3 mt-24">
                        <button type="reset" class="border border-danger-600 bg-hover-danger-200 text-danger-600 text-md px-40 py-11 radius-8" data-bs-dismiss="modal">
                            Batal
                        </button>
                        <button type="submit" class="btn btn-primary-500 text-md px-48 py-12 radius-8">
                            Simpan
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
                        html: '<button type="button" class="btn btn-primary-500 text-sm btn-sm px-12 py-12 radius-8 d-flex align-items-center gap-2 mb-6" data-bs-toggle="modal" data-bs-target="#addModal"><iconify-icon icon="ic:baseline-plus" class="icon text-xl line-height-1"></iconify-icon>Tambah Karyawan</button>'
                    }
                }
            },
            responsive: true
        });
    });
    document.addEventListener('DOMContentLoaded', function () {
            var modal = new bootstrap.Modal(document.getElementById('pwModal'));
            modal.show();
        });
    document.querySelectorAll('.alert .close').forEach(function(btn) {
        btn.addEventListener('click', function() {
            btn.parentElement.style.display = 'none';
        });
    });
</script>
@endpush
