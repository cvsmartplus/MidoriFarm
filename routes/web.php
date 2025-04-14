<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\AssetKelolaController;
use App\Http\Controllers\AssetKategoriController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ChartController;
use App\Http\Controllers\FormsController;
use App\Http\Controllers\TableController;
use App\Http\Controllers\SettingsController;
use App\Http\Controllers\TagihanPelangganController;
use App\Http\Controllers\TagihanPemasokController;
use App\Http\Controllers\ComponentpageController;
use App\Http\Controllers\RoleandaccessController;
use App\Http\Controllers\AuthenticationController;
use App\Http\Controllers\IOTController;
use App\Http\Controllers\PelangganController;
use App\Http\Controllers\PemasokController;
use App\Http\Controllers\PenjualanController;
use App\Http\Controllers\PengeluaranKelolaController;
use App\Http\Controllers\PengeluaranKategoriController;
use App\Http\Controllers\ProdukKelolaController;
use App\Http\Controllers\ProdukKategoriController;

Route::get('/', function () {
    return Auth::check() ? redirect('/admin') : redirect('/login');
});

// ADMIN
Route::middleware(['auth'])->group(function () {
    Route::prefix('admin')->middleware('role:admin')->group(function () {
        Route::get('/', function () {
            return redirect()->route('admin.blogStat');
        });
        Route::controller(DashboardController::class)->group(function () {
            Route::get('/sensor', 'sensor')->name('admin.sensor');
            Route::get('/keuangan', 'index10')->name('admin.keuangan');
        });
        Route::controller(IOTController::class)->group(function () {
            Route::get('/iot/laporan', 'laporan')->name('admin.laporanIOT');
            Route::get('/iot/monitoring', 'monitoring')->name('admin.monitoring');
        });
        Route::controller(BlogController::class)->group(function () {
            Route::get('/addBlog', 'addBlog')->name('admin.addBlog');
            Route::get('/blog', 'blog')->name('admin.blog');
            Route::get('/blogstats', 'blogStat')->name('admin.blogStat');
            Route::get('/blogDetails', 'blogDetails')->name('admin.blogDetails');
        });
        Route::controller(ProdukKelolaController::class)->group(function () {
            Route::get('/produk/kelola', 'index')->name('admin.produkKelola.index');
            Route::put('/produk/kelola/{id}', 'update')->name('admin.produkKelola.update');
            Route::post('/produk/kelola', 'store')->name('admin.produkKelola.store');
            Route::delete('/produk/kelola/{id}', 'destroy')->name('admin.produkKelola.destroy');
        });
        Route::controller(ProdukKategoriController::class)->group(function () {
            Route::get('/produk/kategori', 'index')->name('admin.produkKategori.index');
            Route::put('/produk/kategori/{id}', 'update')->name('admin.produkKategori.update');
            Route::post('/produk/kategori', 'store')->name('admin.produkKategori.store');
            Route::delete('/produk/kategori/{id}', 'destroy')->name('admin.produkKategori.destroy');
        });
        Route::controller(AssetKategoriController::class)->group(function () {
            Route::get('/asset/kategori', 'index')->name('admin.assetKategori.index');
            Route::put('/asset/kategori', 'update')->name('admin.assetKategori.update');
            Route::delete('/asset/kategori/id', 'destroy')->name('admin.assetKategori.destroy');
        });
        Route::controller(AssetKelolaController::class)->group(function () {
            Route::get('/asset/kelola', 'index')->name('admin.assetKelola.index');
            Route::delete('/asset/kelola/id', 'destroy')->name('admin.assetKelola.destroy');
        });
        Route::controller(TagihanPelangganController::class)->group(function () {
            Route::post('/tagihan/pelanggan', 'store')->name('admin.tagihanPelanggan.store');
            Route::get('/tagihan/pelanggan', 'index')->name('admin.tagihanPelanggan.index');
            Route::get('/tagihan/pelanggan/view', 'show')->name('admin.tagihanPelanggan.show');
            Route::put('/tagihan/pelanggan/id', 'update')->name('admin.tagihanPelanggan.update');
            Route::delete('/tagihan/pelanggan/id', 'destroy')->name('admin.tagihanPelanggan.destroy');
        });
        Route::controller(TagihanPemasokController::class)->group(function () {
            Route::post('/tagihan/pemasok', 'store')->name('admin.tagihanPemasok.store');
            Route::get('/tagihan/pemasok', 'index')->name('admin.tagihanPemasok.index');
            Route::get('/tagihan/pemasok/view', 'show')->name('admin.tagihanPemasok.show');
            Route::put('/tagihan/pemasok/id', 'update')->name('admin.tagihanPemasok.update');
            Route::delete('/tagihan/pemasok/id', 'destroy')->name('admin.tagihanPemasok.destroy');
        });
        Route::controller(RoleandaccessController::class)->group(function () {
            Route::get('/assignRole', 'assignRole')->name('admin.assignRole');
            Route::get('/roleAccess', 'roleAccess')->name('admin.roleAccess');
        });
        Route::controller(PelangganController::class)->group(function () {
            Route::post('/pelanggan-pemasok/pelanggan/add-invoice', 'store')->name('admin.pelanggan.store');
            Route::get('/pelanggan-pemasok/pelanggan', 'index')->name('admin.pelanggan.index');
            Route::post('/pelanggan-pemasok/pelanggan', 'store')->name('admin.pelanggan.store');
            Route::put('/pelanggan-pemasok/pelanggan/{id}', 'update')->name('admin.pelanggan.update');
            Route::delete('/pelanggan-pemasok/pelanggan/{id}', 'destroy')->name('admin.pelanggan.destroy');
        });
        Route::controller(PengeluaranKelolaController::class)->group(function () {
            Route::get('/pengeluaran/kelola', 'index')->name('admin.pengeluaranKelola.index');
            Route::put('/pengeluaran/kelola', 'update')->name('admin.pengeluaranKelola.update');
            Route::delete('/pengeluaran/kelola/id', 'destroy')->name('admin.pengeluaranKelola.destroy');
        });
        Route::controller(PengeluaranKategoriController::class)->group(function () {
            Route::get('/pengeluaran/kategori', 'index')->name('admin.pengeluaranKategori.index');
            Route::put('/pengeluaran/kategori', 'update')->name('admin.pengeluaranKategori.update');
            Route::delete('/pengeluaran/kategori/id', 'destroy')->name('admin.pengeluaranKategori.destroy');
        });
        Route::controller(PemasokController::class)->group(function () {
            Route::post('/pemasok-pemasok/pemasok/add-invoice', 'store')->name('admin.pemasok.store');
            Route::get('/pemasok-pemasok/pemasok', 'index')->name('admin.pemasok.index');
            Route::delete('/tagihan/pemasok/id', 'destroy')->name('admin.tagihanPemasok.destroy');
        });
        // diluar fitur website (komponen pendukung pengembangan)
        Route::controller(SettingsController::class)->group(function () {
            Route::get('/company', 'company')->name('company');
            Route::get('/currencies', 'currencies')->name('currencies');
            Route::get('/language', 'language')->name('language');
            Route::get('/notification', 'notification')->name('notification');
            Route::get('/notification-alert', 'notificationAlert')->name('notificationAlert');
            Route::get('/payment-gateway', 'paymentGateway')->name('paymentGateway');
            Route::get('/theme', 'theme')->name('theme');
        });
        Route::controller(TableController::class)->group(function () {
            Route::get('/tablebasic', 'tableBasic')->name('tableBasic');
            Route::get('/tabledata', 'tableData')->name('tableData');
        });
        Route::controller(HomeController::class)->group(function () {
            Route::get('error','error1')->name('error');
            Route::get('email','email')->name('email');
            Route::get('widgets','widgets')->name('widgets');
            Route::get('blankPage','blankPage')->name('blankPage');
            Route::get('maintenance','maintenance')->name('maintenance');
            Route::get('testimonials','testimonials')->name('testimonials');
        });
        Route::controller(ComponentpageController::class)->group(function () {
            Route::get('/alert', 'alert')->name('alert');
            Route::get('/avatar', 'avatar')->name('avatar');
            Route::get('/badges', 'badges')->name('badges');
            Route::get('/button', 'button')->name('button');
            Route::get('/calendar', 'calendar')->name('calendar');
            Route::get('/card', 'card')->name('card');
            Route::get('/carousel', 'carousel')->name('carousel');
            Route::get('/colors', 'colors')->name('colors');
            Route::get('/dropdown', 'dropdown')->name('dropdown');
            Route::get('/imageupload', 'imageUpload')->name('imageUpload');
            Route::get('/list', 'list')->name('list');
            Route::get('/pagination', 'pagination')->name('pagination');
            Route::get('/progress', 'progress')->name('progress');
            Route::get('/radio', 'radio')->name('radio');
            Route::get('/starrating', 'starRating')->name('starRating');
            Route::get('/switch', 'switch')->name('switch');
            Route::get('/tabs', 'tabs')->name('tabs');
            Route::get('/tags', 'tags')->name('tags');
            Route::get('/tooltip', 'tooltip')->name('tooltip');
            Route::get('/typography', 'typography')->name('typography');
            Route::get('/videos', 'videos')->name('videos');
        });
        Route::controller(ChartController::class)->group(function () {
            Route::get('/columnchart', 'columnChart')->name('columnChart');
            Route::get('/linechart', 'lineChart')->name('lineChart');
            Route::get('/piechart', 'pieChart')->name('pieChart');
        });
        Route::controller(FormsController::class)->group(function () {
            Route::get('/form-layout', 'formLayout')->name('formLayout');
            Route::get('/form-validation', 'formValidation')->name('formValidation');
            Route::get('/form', 'form')->name('form');
            Route::get('/wizard', 'wizard')->name('wizard');
        });
    });
});

// OWNER
Route::middleware(['auth'])->group(function () {
    Route::prefix('owner')->middleware('role:owner')->group(function () {
        Route::get('/', function () {
            return redirect()->route('owner.sensor');
        });
        Route::controller(DashboardController::class)->group(function () {
            Route::get('/sensor', 'sensor')->name('owner.sensor');
            Route::get('/keuangan', 'index10')->name('owner.keuangan');
        });
        Route::controller(IOTController::class)->group(function () {
            Route::get('/iot/laporan', 'laporan')->name('owner.laporanIOT');
            Route::get('/iot/monitoring', 'monitoring')->name('owner.monitoring');
        });
        Route::controller(ProdukKelolaController::class)->group(function () {
            Route::get('/produk/kelola', 'index')->name('owner.produkKelola.index');
            Route::post('/produk/kelola', 'store')->name('owner.produkKelola.store');
            Route::put('/produk/kelola/{id}', 'update')->name('owner.produkKelola.update');
            Route::delete('/produk/kelola/{id}', 'destroy')->name('owner.produkKelola.destroy');
        });
        Route::controller(ProdukKategoriController::class)->group(function () {
            Route::get('/produk/kategori', 'index')->name('owner.produkKategori.index');
            Route::post('/produk/kategori/', 'store')->name('owner.produkKategori.store');
            Route::put('/produk/kategori', 'update')->name('owner.produkKategori.update');
            Route::delete('/produk/kategori', 'destroy')->name('owner.produkKategori.destroy');
        });
        Route::controller(AssetKategoriController::class)->group(function () {
            Route::get('/asset/kategori', 'index')->name('owner.assetKategori.index');
            Route::put('/asset/kategori', 'update')->name('owner.assetKategori.update');
            Route::delete('/asset/kategori/id', 'destroy')->name('owner.assetKategori.destroy');
        });
        Route::controller(AssetKelolaController::class)->group(function () {
            Route::get('/asset/kelola', 'index')->name('owner.assetKelola.index');
            Route::delete('/asset/kelola/id', 'destroy')->name('owner.assetKelola.destroy');
        });
        Route::controller(PengeluaranKelolaController::class)->group(function () {
            Route::get('/pengeluaran/kelola', 'index')->name('owner.pengeluaranKelola.index');
            Route::put('/pengeluaran/kelola', 'update')->name('owner.pengeluaranKelola.update');
            Route::delete('/pengeluaran/kelola/id', 'destroy')->name('owner.pengeluaranKelola.destroy');
        });
        Route::controller(PengeluaranKategoriController::class)->group(function () {
            Route::get('/pengeluaran/kategori', 'index')->name('owner.pengeluaranKategori.index');
            Route::put('/pengeluaran/kategori', 'update')->name('owner.pengeluaranKategori.update');
            Route::delete('/pengeluaran/kategori/id', 'destroy')->name('owner.pengeluaranKategori.destroy');
        });
        Route::controller(TagihanPelangganController::class)->group(function () {
            Route::post('/tagihan/pelanggan', 'store')->name('owner.tagihanPelanggan.store');
            Route::get('/tagihan/pelanggan', 'index')->name('owner.tagihanPelanggan.index');
            Route::get('/tagihan/pelanggan/view', 'show')->name('owner.tagihanPelanggan.show');
            Route::put('/tagihan/pelanggan/id', 'update')->name('owner.tagihanPelanggan.update');
            Route::delete('/tagihan/pelanggan/id', 'destroy')->name('owner.tagihanPelanggan.destroy');
        });
        Route::controller(TagihanPemasokController::class)->group(function () {
            Route::post('/tagihan/pemasok', 'store')->name('owner.tagihanPemasok.store');
            Route::get('/tagihan/pemasok', 'index')->name('owner.tagihanPemasok.index');
            Route::get('/tagihan/pemasok/view', 'show')->name('owner.tagihanPemasok.show');
            Route::put('/tagihan/pemasok/id', 'update')->name('owner.tagihanPemasok.update');
            Route::delete('/tagihan/pemasok/id', 'destroy')->name('owner.tagihanPemasok.destroy');
        });
        Route::controller(RoleandaccessController::class)->group(function () {
            Route::get('/assignRole', 'assignRole')->name('owner.assignRole');
            Route::get('/roleAccess', 'roleAccess')->name('owner.roleAccess');
        });
        Route::controller(PelangganController::class)->group(function () {
            Route::post('/pelanggan-pemasok/pelanggan/add-invoice', 'store')->name('owner.pelanggan.store');
            Route::get('/pelanggan-pemasok/pelanggan', 'index')->name('owner.pelanggan.index');
            Route::post('/pelanggan-pemasok/pelanggan', 'store')->name('owner.pelanggan.store');
            Route::put('/pelanggan-pemasok/pelanggan/{id}', 'update')->name('owner.pelanggan.update');
            Route::delete('/pelanggan-pemasok/pelanggan/{id}', 'destroy')->name('owner.pelanggan.destroy');
        });
        Route::controller(PemasokController::class)->group(function () {
            Route::post('/pelanggan-pemasok/pemasok', 'store')->name('owner.pemasok.store');
            Route::get('/pelanggan-pemasok/pemasok', 'index')->name('owner.pemasok.index');
            Route::delete('/pelanggan-pemasok/pemasok', 'destroy')->name('owner.Pemasok.destroy');
        });
    });
});

// PETANI
Route::middleware(['auth'])->group(function (){
    Route::prefix('petani')->middleware('role:petani')->group(function () {
        Route::controller(DashboardController::class)->group(function () {
            Route::get('/sensor', 'sensor')->name('petani.sensor');
        });
    });
});

// AKUNTAN
Route::middleware(['auth'])->group(function () {
    Route::prefix('akuntan')->middleware('role:akuntan')->group(function () {
        Route::controller(DashboardController::class)->group(function () {
            Route::get('/keuangan', 'p10')->name('akuntan.keuangan');
        });
        Route::controller(TagihanPelangganController::class)->group(function () {
            Route::post('/tagihan/pelanggan', 'store')->name('akuntan.tagihanPelanggan.store');
            Route::get('/tagihan/pelanggan', 'index')->name('akuntan.tagihanPelanggan.index');
            Route::get('/tagihan/pelanggan/view', 'show')->name('akuntan.tagihanPelanggan.show');
            Route::put('/tagihan/pelanggan/id', 'update')->name('akuntan.tagihanPelanggan.update');
            Route::delete('/tagihan/pelanggan/id', 'destroy')->name('akuntan.tagihanPelanggan.destroy');
        });
        Route::controller(TagihanPemasokController::class)->group(function () {
            Route::post('/tagihan/pemasok', 'store')->name('akuntan.tagihanPemasok.store');
            Route::get('/tagihan/pemasok', 'index')->name('akuntan.tagihanPemasok.index');
            Route::get('/tagihan/pemasok/view', 'show')->name('akuntan.tagihanPemasok.show');
            Route::put('/tagihan/pemasok/id', 'update')->name('akuntan.tagihanPemasok.update');
            Route::delete('/tagihan/pemasok/id', 'destroy')->name('akuntan.tagihanPemasok.destroy');
        });
        Route::controller(AssetKategoriController::class)->group(function () {
            Route::get('/asset/kategori', 'index')->name('akuntan.assetKategori.index');
            Route::put('/asset/kategori', 'update')->name('akuntan.assetKategori.update');
            Route::delete('/asset/kategori/id', 'destroy')->name('akuntan.assetKategori.destroy');
        });
        Route::controller(AssetKelolaController::class)->group(function () {
            Route::get('/asset/kelola', 'index')->name('akuntan.assetKelola.index');
            Route::delete('/asset/kelola/id', 'destroy')->name('akuntan.assetKelola.destroy');
        });
        Route::controller(PengeluaranKelolaController::class)->group(function () {
            Route::get('/pengeluaran/kelola', 'index')->name('akuntan.pengeluaranKelola.index');
            Route::put('/pengeluaran/kelola', 'update')->name('akuntan.pengeluaranKelola.update');
            Route::delete('/pengeluaran/kelola/id', 'destroy')->name('akuntan.pengeluaranKelola.destroy');
        });
        Route::controller(PengeluaranKategoriController::class)->group(function () {
            Route::get('/pengeluaran/kategori', 'index')->name('akuntan.pengeluaranKategori.index');
            Route::put('/pengeluaran/kategori', 'update')->name('akuntan.pengeluaranKategori.update');
            Route::delete('/pengeluaran/kategori/id', 'destroy')->name('akuntan.pengeluaranKategori.destroy');
        });
    });
});

Route::controller(AuthenticationController::class)->group(function () {
    Route::get('/forgotpassword', 'forgotPassword')->name('forgotPassword');
    Route::get('/login',  'loginPage')->name('login');
    Route::post('/login',  'loginPost')->name('loginPost');
    Route::post('/logout',  'logout')->name('logout');
});





