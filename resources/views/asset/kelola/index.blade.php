@extends('layout.layout')
@php
    $title = 'Kelola Asset';
    $subTitle = 'Asset - Kelola';
    // $script = tambahin script buat modal untuk nyimpan data disini
@endphp
@section('content')
<div class="card h-100 p-0 radius-12">
    <div class="card-body">
        <div class="table-responsive scroll-sm">
            <table class="table bordered-table sm-table mb-0" id="dataTable" cellspacing="0">
                <thead>
                    <tr>
                        <th scope="col" class="text-center">No.</th>
                        <th scope="col" class="text-center">Kategori</th>
                        <th scope="col" class="text-center">Nama</th>
                        <th scope="col" class="text-center">Harga Beli</th>
                        <th scope="col" class="text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody id="table">
                    @foreach($asset as $key => $asset)
                    <tr>
                        <td class="text-center">{{$key + 1}}</td>
                        <td class="text-center">{{$asset->category->name_category}}</td>
                        <td class="text-center">{{$asset->name_product}}</td>
                        <td class="text-center">{{format_uang($asset->purchase)}}</td>
                        <td class="text-center">
                            <div class="d-flex align-items-center gap-10 justify-content-center">
                                <button type="button"
                                    class="bg-success-focus text-success-600 bg-hover-success-200 fw-medium w-40-px h-40-px d-flex justify-content-center align-items-center rounded-circle"
                                    data-bs-toggle="modal" data-bs-target="#editModal{{$asset->id}}">
                                    <iconify-icon icon="lucide:edit" class="menu-icon"></iconify-icon>
                                </button>
                                <button type="button"
                                    class="bg-danger-focus bg-hover-danger-200 text-danger-600 fw-medium w-40-px h-40-px d-flex justify-content-center align-items-center rounded-circle"
                                    data-bs-toggle="modal" data-bs-target="#deleteModal{{$asset->id}}">
                                    <iconify-icon icon="fluent:delete-24-regular" class="menu-icon"></iconify-icon>
                                </button>
                            </div>
                        </td>
                    </tr>

                    <!-- Modal Update -->
                    <div class="modal fade" id="editModal{{$asset->id}}" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="editModalLabel">Update Asset</h1>
                                </div>
                                <div class="modal-body p-24">
                                    <form action=""></form>
                                    <form action="{{ routeByRole('admin.assetKelola.update','owner.assetKelola.update', null, null, ['kelola' => $asset->id]) }}" method="POST">
                                        @csrf  
                                        @method('PUT')
                                        <div class="row">
                                            <div class="col-12">
                                                <label class="form-label">Nama Asset</label>
                                                <input type="text" id="name_product" name="name_product" class="form-control"
                                                    value="{{$asset->name_product}}" placeholder="Masukkan Nama Asset" required>
                                            </div>
                                            <div class="col-12">
                                                <label class="form-label">Harga Beli</label>
                                                <input type="number" id="purchase" name="purchase" class="form-control"
                                                    value="{{$asset->purchase}}" placeholder="Harga Beli" required>
                                            </div>
                                            <div class="col-12">
                                                <label class="form-label">Kategori</label>
                                                <select id="id_cat_product" name="id_cat_product" class="form-control radius-8 form-select" required>
                                                    @foreach ($kategori as $key => $item)
                                                        <option value="{{ $key }}" {{ $asset->id_cat_product == $key ? 'selected' : '' }}>
                                                            {{ $item }}
                                                        </option>
                                                    @endforeach
                                                </select>
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
                    <!-- Modal Update -->


                    <!-- Modal Warning-->
                    <div class="modal fade" id="deleteModal{{$asset->id}}" data-bs-backdrop="static"
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
                                    <form action="{{ routeByRole('admin.assetKelola.destroy','owner.assetKelola.destroy'  , null, null, ['kelola' => $asset->id]) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Tidak</button>
                                        <button type="submit" class="btn btn-danger">Hapus</button>
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
                <h1 class="modal-title fs-5" id="addModalLabel">Tambah asset</h1>
            </div>
            <div class="modal-body p-24">
                <form action=""></form>
                <form action="{{ routeByRole('admin.assetKelola.store', 'owner.assetKelola.store', null, null) }}" method="POST" class="needs-validation" novalidate>
                    @csrf
                    @method('post') 
                    <div class="row">
                        <div class="col-12">
                            <label class="form-label">Nama Asset</label>
                            <input type="text" id="name_product" name="name_product"  class="form-control"
                            placeholder="Masukkan Nama Asset" required>
                        </div>
                        <div class="col-12">
                            <label class="form-label">Harga Beli</label>
                                <input type="number" id="purchase" name="purchase"  class="form-control"
                                    placeholder="Harga Beli" required>
                        </div>
                        <div class="col-12">
                            <label class="form-label">Kategori</label>
                            <select id="id_cat_product" name="id_cat_product" class="form-control radius-8 form-select" required>
                                @foreach ($kategori as $key => $item)
                                <option value="{{ $key }}">
                                {{ $item }}
                                </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="d-flex align-items-center justify-content-center gap-3 mt-24">
                            <button type="reset"
                                class="border border-danger-600 bg-hover-danger-200 text-danger-600 text-md px-40 py-11 radius-8"
                                data-bs-dismiss="modal">
                                Batal
                            </button>
                            <button type="submit"
                                class="btn btn-primary-500  text-md px-48 py-12 radius-8">
                                Simpan
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
                        html: '<button type="button" class="btn btn-primary-500 text-sm btn-sm px-12 py-12 radius-8 d-flex align-items-center gap-2 mb-6" data-bs-toggle="modal" data-bs-target="#addModal"><iconify-icon icon="ic:baseline-plus" class="icon text-xl line-height-1"></iconify-icon>Tambah Asset</button>'
                    }
                }
            },
            responsive: true
        });
    });
</script>

@endpush