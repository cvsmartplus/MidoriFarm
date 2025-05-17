@extends('layout.layout')
@php
    $title='Keuangan';
    $subTitle = 'Keuangan';
@endphp

@section('content')
<div class="row gy-4">
    {{-- Tagihan Pemasok --}}
    <div class="col-xxl-4 col-md-6">
        <div class="card h-100">
            <div class="card-header d-flex align-items-center justify-content-between">
                <h6 class="fw-bold text-lg mb-0">Tagihan Pemasok</h6>
                <a href="{{ routeByRole('admin.tagihanPemasok.index', 'owner.tagihanPemasok.index', null, 'akuntan.tagihanPemasok.index') }}" class="text-primary-600 d-flex align-items-center gap-1">
                    Lihat Semua <iconify-icon icon="solar:alt-arrow-right-linear" class="icon"></iconify-icon>
                </a>
            </div>
            <div class="card-body p-24">
                <div class="table-responsive scroll-sm">
                    <table class="table bordered-table mb-0">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Nama Supplier</th>
                                <th>Nominal</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($tpemasok as $i => $item)
                                <tr>
                                    <td>{{ $i + 1 }}</td>
                                    <td>{{ $item->supplier->name ?? '-' }}</td>
                                    <td>{{ format_uang($item->amount) }}</td>
                                </tr>
                            @empty
                                <tr><td colspan="3" class="text-center">Tidak ada data</td></tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    {{-- Tagihan Pelanggan --}}
    <div class="col-xxl-4 col-md-6">
        <div class="card h-100">
            <div class="card-header d-flex align-items-center justify-content-between">
                <h6 class="fw-bold text-lg mb-0">Tagihan Pelanggan</h6>
                <a href="{{ routeByRole('admin.tagihanPelanggan.index', 'owner.tagihanPelanggan.index', null, 'akuntan.tagihanPelanggan.index') }}" class="text-primary-600 d-flex align-items-center gap-1">
                    Lihat Semua <iconify-icon icon="solar:alt-arrow-right-linear" class="icon"></iconify-icon>
                </a>
            </div>
            <div class="card-body p-24">
                <div class="table-responsive scroll-sm">
                    <table class="table bordered-table mb-0">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Nama Customer</th>
                                <th>Nominal</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($tpelanggan as $i => $item)
                                <tr>
                                    <td>{{ $i + 1 }}</td>
                                    <td>{{ $item->customer->name ?? '-' }}</td>
                                    <td>{{ format_uang($item->amount) }}</td>
                                </tr>
                            @empty
                                <tr><td colspan="3" class="text-center">Tidak ada data</td></tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    {{-- Pengeluaran --}}
    <div class="col-xxl-4 col-md-6">
        <div class="card h-100">
            <div class="card-header d-flex align-items-center justify-content-between">
                <h6 class="fw-bold text-lg mb-0">Pengeluaran</h6>
                <a href="{{ routeByRole('admin.pengeluaranKelola.index','owner.pengeluaranKelola.index', null, 'akuntan.pengeluaranKelola.index') }}" class="text-primary-600 d-flex align-items-center gap-1">
                    Lihat Semua <iconify-icon icon="solar:alt-arrow-right-linear" class="icon"></iconify-icon>
                </a>
            </div>
            <div class="card-body p-24">
                <div class="table-responsive scroll-sm">
                    <table class="table bordered-table mb-0">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Kategori</th>
                                <th>Jumlah</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($pengeluaran as $i => $item)
                                <tr>
                                    <td>{{ $i + 1 }}</td>
                                    <td>{{ $item->category->name_category ?? '-' }}</td>
                                    <td>{{ format_uang($item->subtotal) }}</td>
                                </tr>
                            @empty
                                <tr><td colspan="3" class="text-center">Tidak ada data</td></tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    {{-- Penjualan Terbaru --}}
    <div class="col-xxl-8">
        <div class="card h-100">
            <div class="card-header d-flex align-items-center justify-content-between">
                <h6 class="fw-bold text-lg mb-0">Penjualan Terbaru</h6>
                <a href="{{ routeByRole('admin.penjualan.index', 'owner.penjualan.index', null, 'akuntan.penjualan.index') }}" class="text-primary-600 d-flex align-items-center gap-1">
                    Lihat Semua <iconify-icon icon="solar:alt-arrow-right-linear" class="icon"></iconify-icon>
                </a>
            </div>
            <div class="card-body p-24">
                <div class="table-responsive scroll-sm">
                    <table class="table bordered-table mb-0">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Produk</th>
                                <th>Qty</th>
                                <th>Subtotal</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($penjualanItems as $i => $item)
                                <tr>
                                    <td>{{ $i + 1 }}</td>
                                    <td>{{ $item['produk'] }}</td>
                                    <td>{{ $item['quantity'] }}</td>
                                    <td>{{ format_uang($item['subtotal']) }}</td>
                                </tr>
                            @empty
                                <tr><td colspan="4" class="text-center">Tidak ada data</td></tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    {{-- Asset --}}
    <div class="col-xxl-4 col-md-6">
        <div class="card h-100">
            <div class="card-header d-flex align-items-center justify-content-between">
                <h6 class="fw-bold text-lg mb-0">Asset</h6>
                <a href="{{ routeByRole('admin.assetKelola.index','owner.assetKelola.index', null, 'akuntan.assetKelola.index') }}" class="text-primary-600 d-flex align-items-center gap-1">
                    Lihat Semua <iconify-icon icon="solar:alt-arrow-right-linear" class="icon"></iconify-icon>
                </a>
            </div>
            <div class="card-body p-24">
                <div class="table-responsive scroll-sm">
                    <table class="table bordered-table mb-0">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Asset</th>
                                <th>Harga Beli</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($asset as $i => $item)
                                <tr>
                                    <td>{{ $i + 1 }}</td>
                                    <td>{{ $item->name_product }}</td>
                                    <td>{{ format_uang($item->purchase) }}</td>
                                </tr>
                            @empty
                                <tr><td colspan="3" class="text-center">Tidak ada data</td></tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
