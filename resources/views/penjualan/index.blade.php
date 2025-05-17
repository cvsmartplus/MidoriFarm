@extends('layout.layout')
<?php
    $title = 'Penjualan';
    $subTitle = 'Penjualan';
    $script = '';
?>
@section('content')
<div class="card h-100 p-0 radius-12">
    <div class="card-body">
        <div class="table-responsive scroll-sm">
            <table class="table bordered-table sm-table mb-0" id="dataTable" cellspacing="0">
                <thead>
                    <tr>
                        <th scope="col" class="text-center">Tanggal & Waktu</th>
                        <th scope="col" class="text-center">Nama Pelanggan</th>
                        <th scope="col" class="text-center">Produk</th>
                        <th scope="col" class="text-center">Kuantitas</th>
                        <th scope="col" class="text-center">Total</th>
                        <th scope="col" class="text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody id="table">
                    @foreach ($laporan as $item)
                    <tr>
                        <td class="text-center">{{ $item->penjualan->created_at }}</td>
                        <td class="text-center">{{ $item->penjualan->customer?->name ?? '-' }}</td>
                        <td class="text-center">{{ $item->produk?->name_product ?? '-' }}</td>
                        <td class="text-center">{{ $item->quantity }}</td>
                        <td class="text-center">{{ format_uang($item->penjualan->total) }}</td>
                        <td class="text-center">
                            <div class="d-flex align-items-center gap-10 justify-content-center">
                                <a href='{{ routeByRole('admin.penjualan.show','owner.penjualan.show', null, 'akuntan.penjualan.show', ['penjualan' => $item->penjualan->id]) }}'
                                    class="bg-info-focus bg-hover-info-200 text-info-600 fw-medium w-40-px h-40-px d-flex justify-content-center align-items-center rounded-circle">
                                    <iconify-icon icon="lucide:eye"></iconify-icon>
                                </a>
                                <button type="button"
                                    class="bg-danger-focus bg-hover-danger-200 text-danger-600 fw-medium w-40-px h-40-px d-flex justify-content-center align-items-center rounded-circle"
                                    data-bs-toggle="modal" data-bs-target="#deleteModal{{ $item->penjualan->id }}">
                                    <iconify-icon icon="fluent:delete-24-regular" class="menu-icon"></iconify-icon>
                                </button>
                            </div>
                        </td>
                    </tr>

                    <!-- Modal Warning-->
                    <div class="modal fade" id="deleteModal{{ $item->penjualan->id }}" data-bs-backdrop="static"
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
                                    <form action="{{ routeByRole('admin.penjualan.destroy', 'owner.penjualan.destroy', null, 'akuntan.penjualan.destroy', ['penjualan' => $item->penjualan->id]) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tidak</button>
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

@endsection

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function () {
        new DataTable("#dataTable", {
            paging: true,
            autoWidth: true,
            fixedHeader: false,
            buttons: ["excelHtml5", "csvHtml5", "pdfHtml5", "print"],
            filter: true,
            initComplete: function () {
                var btns = document.querySelectorAll(".dt-button");
                btns.forEach(function (btn) {
                    btn.classList.add("btn", "btn-primary-500", "btn-sm");
                    btn.classList.remove("dt-button");
                });
            },
            layout: {
                topStart: ["search", "buttons"],
                topEnd: []
            },
            responsive: true
        });
    });
</script>

@endpush
