<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    AuthenticationController,
    DashboardController,
    IOTController,
    BlogController,
    KaryawanController,
    ProdukKelolaController,
    ProdukKategoriController,
    AssetKelolaController,
    AssetKategoriController,
    PengeluaranKelolaController,
    PengeluaranKategoriController,
    TagihanPelangganController,
    NotificationController,
    TagihanPemasokController,
    PelangganController,
    PemasokController,
    PenjualanController
};

Route::middleware('guest')
->group( function () {
    Route::controller(AuthenticationController::class)->group(function () {
        Route::get('/login',  'loginPage')->name('login');
        Route::post('/login',  'loginPost')->name('loginPost');
    });
});

Route::middleware('auth')->group(function () {
    Route::get('/', function () {
        $user = Auth::user();

        if ($user->hasRole('admin')) return redirect()->route('admin.blogStat');
        if ($user->hasRole('owner')) return redirect()->route('owner.sensor');
        if ($user->hasRole('petani')) return redirect()->route('petani.sensor');
        if ($user->hasRole('akuntan')) return redirect()->route('akuntan.keuangan');
    });
    Route::post('/logout',  [AuthenticationController::class,'logout'])->name('logout');
});

// === ADMIN ROUTES ===
Route::middleware(['auth', 'role:admin'])
    ->prefix('admin')
    ->name('admin.')
    ->group(function () {
        // Non-CRUD routes
        Route::get('sensor', [DashboardController::class, 'sensor'])->name('sensor');
        Route::get('keuangan', [DashboardController::class, 'index10'])->name('keuangan');
        Route::get('iot/laporan', [IOTController::class, 'laporan'])->name('laporanIOT');
        Route::get('iot/monitoring', [IOTController::class, 'monitoring'])->name('monitoring');
        Route::get('addBlog', [BlogController::class, 'addBlog'])->name('addBlog');
        Route::get('notification', [NotificationController::class, 'index'])->name('notification');
        Route::get('blog', [BlogController::class, 'blog'])->name('blog');
        Route::get('blogstats', [BlogController::class, 'blogStat'])->name('blogStat');
        Route::get('blogDetails', [BlogController::class, 'blogDetails'])->name('blogDetails');

        // CRUD routes (Resourceful) - Dengan nama unik
        Route::resource('karyawan', KaryawanController::class)->names('karyawan');

        Route::resource('produk/kelola', ProdukKelolaController::class)->names('produkKelola');
        Route::resource('produk/kategori', ProdukKategoriController::class)->names('produkKategori');

        Route::resource('asset/kelola', AssetKelolaController::class)->names('assetKelola');
        Route::resource('asset/kategori', AssetKategoriController::class)->names('assetKategori');

        Route::resource('pengeluaran/kelola', PengeluaranKelolaController::class)->names('pengeluaranKelola');
        Route::resource('pengeluaran/kategori', PengeluaranKategoriController::class)->names('pengeluaranKategori');

        Route::resource('tagihan/pelanggan', TagihanPelangganController::class)->names('tagihanPelanggan');
        Route::resource('tagihan/pemasok', TagihanPemasokController::class)->names('tagihanPemasok');

        Route::resource('pelanggan-pemasok/pelanggan', PelangganController::class)->names('pelanggan');
        Route::resource('pelanggan-pemasok/pemasok', PemasokController::class)->names('pemasok');

        Route::resource('penjualan', PenjualanController::class)->names('penjualan');
        Route::resource('penjualan/laporan', PenjualanController::class)->names('penjualanlaporan');
    });

// === OWNER ROUTES ===
Route::middleware(['auth','role:owner'])
    ->prefix('owner')->name('owner.')
    ->group(function(){
        // Non-CRUD routes
        Route::get('sensor',[DashboardController::class,'sensor'])->name('sensor');
        Route::get('keuangan',[DashboardController::class,'index10'])->name('keuangan');
        Route::get('iot/laporan',[IOTController::class,'laporan'])->name('laporanIOT');
        Route::get('iot/monitoring',[IOTController::class,'monitoring'])->name('monitoring');
        Route::get('notification', [NotificationController::class, 'index'])->name('notification');

        // CRUD routes (Resourceful) - Dengan nama unik
        Route::resource('karyawan', KaryawanController::class)->names('karyawan');

        Route::resource('produk/kelola', ProdukKelolaController::class)->names('produkKelola');
        Route::resource('produk/kategori', ProdukKategoriController::class)->names('produkKategori');

        Route::resource('asset/kelola', AssetKelolaController::class)->names('assetKelola');
        Route::resource('asset/kategori', AssetKategoriController::class)->names('assetKategori');

        Route::resource('pengeluaran/kelola', PengeluaranKelolaController::class)->names('pengeluaranKelola');
        Route::resource('pengeluaran/kategori', PengeluaranKategoriController::class)->names('pengeluaranKategori');

        Route::resource('tagihan/pelanggan', TagihanPelangganController::class)->names('tagihanPelanggan');
        Route::resource('tagihan/pemasok', TagihanPemasokController::class)->names('tagihanPemasok');

        Route::resource('pelanggan-pemasok/pelanggan', PelangganController::class)->names('pelanggan');
        Route::resource('pelanggan-pemasok/pemasok', PemasokController::class)->names('pemasok');

        Route::resource('penjualan', PenjualanController::class)->names('penjualan');
    });

// === PETANI ROUTES ===
Route::middleware(['auth','role:petani'])
    ->prefix('petani')->name('petani.')
    ->group(function(){
        Route::get('sensor',[DashboardController::class,'sensor'])->name('sensor');
        Route::get('iot/laporan',[IOTController::class,'laporan'])->name('laporanIOT');
        Route::get('notification', [NotificationController::class, 'index'])->name('notification');
        Route::get('iot/monitoring',[IOTController::class,'monitoring'])->name('monitoring');
    });

// === AKUNTAN ROUTES ===
Route::middleware(['auth','role:akuntan'])
    ->prefix('akuntan')->name('akuntan.')
    ->group(function(){
        Route::get('notification', [NotificationController::class, 'index'])->name('notification');
        Route::get('keuangan',[DashboardController::class,'index10'])->name('keuangan');

        Route::resource('asset/kelola', AssetKelolaController::class)->names('assetKelola');
        Route::resource('asset/kategori', AssetKategoriController::class)->names('assetKategori');

        Route::resource('pengeluaran/kelola', PengeluaranKelolaController::class)->names('pengeluaranKelola');
        Route::resource('pengeluaran/kategori', PengeluaranKategoriController::class)->names('pengeluaranKategori');

        Route::resource('tagihan/pelanggan', TagihanPelangganController::class)->names('tagihanPelanggan');
        Route::resource('tagihan/pemasok', TagihanPemasokController::class)->names('tagihanPemasok');

        Route::resource('penjualan', PenjualanController::class)->names('penjualan');
    });

?>
