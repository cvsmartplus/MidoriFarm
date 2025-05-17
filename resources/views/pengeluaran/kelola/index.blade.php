@extends('layout.layout')
@php
    $title='Pengeluaran';
    $subTitle = 'Pengeluaran';
@endphp

@section('content')
<div class="card h-100 p-0 radius-12">
    <div class="card-body">
        <div class="table-responsive scroll-sm">
            <table class="table bordered-table sm-table mb-0" id="dataTable" cellspacing="0">
                <thead>
                    <tr>
                        <th class="text-center">No.</th>
                        <th class="text-center">Tanggal</th>
                        <th class="text-center">Kategori</th>
                        <th class="text-center">Deskripsi</th>
                        <th class="text-center">Nominal</th>
                        <th class="text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody id="table">
                    @foreach($pengeluaran as $i => $peng)
                    <tr>
                        <td class="text-center">{{$i + 1}}</td>
                        <td class="text-center">{{tanggal_indonesia($peng->date)}}</td>
                        <td class="text-center">{{$peng->category->name_category}}</td>
                        <td class="text-center">{{$peng->description}}</td>
                        <td class="text-center">Rp. {{format_uang($peng->subtotal)}}</td>
                        <td class="text-center">
                            <div class="d-flex align-items-center gap-10 justify-content-center">
                                <button type="button"
                                    class="bg-success-focus text-success-600 bg-hover-success-200 fw-medium w-40-px h-40-px d-flex justify-content-center align-items-center rounded-circle"
                                    data-bs-toggle="modal" data-bs-target="#editModal{{$peng->id}}">
                                    <iconify-icon icon="lucide:edit" class="menu-icon"></iconify-icon>
                                </button>
                                <button type="button"
                                    class="bg-danger-focus bg-hover-danger-200 text-danger-600 fw-medium w-40-px h-40-px d-flex justify-content-center align-items-center rounded-circle"
                                    data-bs-toggle="modal" data-bs-target="#deleteModal{{$peng->id}}">
                                    <iconify-icon icon="fluent:delete-24-regular" class="menu-icon"></iconify-icon>
                                </button>
                            </div>
                        </td>
                    </tr>

                    <!-- Modal Update -->
                    <div class="modal fade" id="editModal{{$peng->id}}" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="editModalLabel">Update Pengeluaran</h1>
                                </div>
                                <div class="modal-body p-24">
                                    <form action=""></form>
                                    <form action="{{ routeByRole('admin.pengeluaranKelola.update','owner.pengeluaranKelola.update', null, 'admin.pengeluaranKelola.update', ['kelola' => $peng->id]) }}" method="POST">
                                        @csrf
                                        @method('PUT')
                                        <div class="row">
                                            <div class="col-12">
                                                <label class="form-label">Tanggal</label>
                                                <input type="date" id="date" name="date" class="form-control"
                                                    value="{{$peng->date}}" placeholder="Tanggal Pengeluaran" required>
                                            </div>
                                            <div class="col-12">
                                                <label class="form-label">Kategori</label>
                                                <select id="id_cat_product" name="id_cat_product" class="form-control radius-8 form-select" required>
                                                    @foreach ($kategori as $key => $item)
                                                        <option value="{{ $key }}" {{ $peng->id_cat_product == $key ? 'selected' : '' }}>
                                                            {{ $item }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="col-12">
                                                <label class="form-label">Deskripsi</label>
                                                <input type="text" id="description" name="description" class="form-control"
                                                    value="{{$peng->description}}" placeholder="Deskripsi Pengeluaran" required>
                                                </div>
                                            <div class="col-12">
                                                <label class="form-label">Nominal</label>
                                                <input type="number" id="subtotal" name="subtotal" class="form-control"
                                                    value="{{$peng->subtotal}}" placeholder="Harga Jual" required>
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


                    <!-- Modal Delete -->
                    <div class="modal fade" id="deleteModal{{$peng->id}}" data-bs-backdrop="static"
                        data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Peringatan</h5>
                                </div>
                                <div class="modal-body">
                                    Apakah anda yakin data ingin dihapus?
                                </div>
                                <div class="modal-footer">
                                    <form action="{{ routeByRole('admin.pengeluaranKelola.destroy', 'owner.pengeluaranKelola.destroy', null, 'akuntan.pengeluaranKelola.destroy', ['kelola' => $peng->id]) }}" method="post">
                                        @csrf
                                        @method('delete')
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tidak</button>
                                        <button type="submit" class="btn btn-danger">Iya</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Modal Delete -->
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
                <h1 class="modal-title fs-5">Tambah Pengeluaran</h1>
            </div>
            <div class="modal-body p-24">
                <form action="{{ routeByRole('admin.pengeluaranKelola.store', 'owner.pengeluaranKelola.store', null, 'akuntan.pengeluaranKelola.store') }}" method="post" class="needs-validation" novalidate>
                    @csrf
                    @method('post')
                    <div class="row">
                         <div class="col-12">
                            <label class="form-label">Tanggal</label>
                            <input type="date" id="date" name="date" class="form-control"
                            placeholder="Tanggal Pengeluaran" required>
                        </div>
                        <div class="col-12">
                            <label class="form-label">Kategori</label>
                            <select id="id_cat_exp" name="id_cat_exp" class="form-control radius-8 form-select" required>
                                @foreach ($kategori as $key => $item)
                                    <option value="{{ $key }}" {{ $peng->id_cat_exp == $key ? 'selected' : '' }}>
                                        {{ $item }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-12">
                            <label class="form-label">Deskripsi</label>
                            <input type="text" id="description" name="description" class="form-control"
                            placeholder="Deskripsi Pengeluaran" required>
                            </div>
                        <div class="col-12">
                            <label class="form-label">Nominal</label>
                            <input type="number" id="subtotal" name="subtotal" class="form-control"
                            placeholder="Harga Jual" required>
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
<!-- End Modal Add -->

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
                    btn.classList.add("btn", "btn-primary-500", "btn-sm");
                    btn.classList.remove("dt-button");
                });
            },
            layout: {
                topStart: ["search", "buttons"],
                topEnd: {
                    div: {
                        html: '<button type="button" class="btn btn-primary-500 text-sm btn-sm px-12 py-12 radius-8 d-flex align-items-center gap-2 mb-6" data-bs-toggle="modal" data-bs-target="#addModal"><iconify-icon icon="ic:baseline-plus" class="icon text-xl line-height-1"></iconify-icon>Tambah Pengeluaran</button>'
                    }
                }
            },
            responsive: true
        });
    });
</script>

@endpush

