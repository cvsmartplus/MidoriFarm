<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ChartController;
use App\Http\Controllers\FormsController;
use App\Http\Controllers\TableController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\SettingsController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\TagihanController;
use App\Http\Controllers\ComponentpageController;
use App\Http\Controllers\RoleandaccessController;
use App\Http\Controllers\AuthenticationController;


Route::get('/', function () {
    return auth()->check() ? redirect('/admin') : redirect('/login');
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
        Route::controller(BlogController::class)->group(function () {
            Route::get('/addBlog', 'addBlog')->name('admin.addBlog');
            Route::get('/blog', 'blog')->name('admin.blog');
            Route::get('/blogstats', 'blogStat')->name('admin.blogStat');
            Route::get('/blogDetails', 'blogDetails')->name('admin.blogDetails');
        });
        Route::controller(BarangController::class)->group(function () {
            Route::get('/barang', 'barang')->name('admin.barang');
            Route::get('/barang-edit', 'barangEdit')->name('admin.barangEdit');
            Route::get('/produkbarang', 'barangList')->name('admin.barangList');
            Route::get('/barang-preview', 'barangPreview')->name('admin.barangPreview');
        });
        Route::controller(TagihanController::class)->group(function () {
            // Route::get('/tagihan', 'Financetagihan')->name('Financetagihan');
            Route::get('/tagihan-edit', 'tagihanEdit')->name('admin.tagihanEdit');
            Route::get('/tagihan-list', 'tagihanList')->name('admin.tagihanList');
            Route::get('/tagihan-preview', 'tagihanPreview')->name('admin.tagihanPreview');
        });
        Route::controller(RoleandaccessController::class)->group(function () {
            Route::get('/assignRole', 'assignRole')->name('admin.assignRole');
            Route::get('/roleAccess', 'roleAccess')->name('admin.roleAccess');
        });
        Route::controller(UsersController::class)->group(function () {
            Route::get('/add-user', 'addUser')->name('admin.addUser');
            Route::get('/add-supplier', 'addSupplier')->name('admin.addSupplier');
            Route::get('/users-list', 'usersList')->name('admin.usersList');
            Route::get('/supplier-list', 'supplierList')->name('admin.supplierList');
            Route::get('/view-profile-customer', 'viewProfileCustomer')->name('admin.viewProfileCustomer');
            Route::get('/view-profile-supplier', 'viewProfileSupplier')->name('admin.viewProfileSupplier');
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
        Route::controller(BarangController::class)->group(function () {
            Route::get('/barang', 'barang')->name('owner.barang');
            Route::get('/barang-edit', 'barangEdit')->name('owner.barangEdit');
            Route::get('/produkbarang', 'barangList')->name('owner.barangList');
            Route::get('/barang-preview', 'barangPreview')->name('owner.barangPreview');
        });
        Route::controller(TagihanController::class)->group(function () {
            Route::get('/tagihan-edit', 'tagihanEdit')->name('owner.tagihanEdit');
            Route::get('/tagihan-list', 'tagihanList')->name('owner.tagihanList');
            Route::get('/tagihan-preview', 'tagihanPreview')->name('owner.tagihanPreview');
        });
        Route::controller(RoleandaccessController::class)->group(function () {
            Route::get('/assignRole', 'assignRole')->name('owner.assignRole');
            Route::get('/roleAccess', 'roleAccess')->name('owner.roleAccess');
        });
        Route::controller(UsersController::class)->group(function () {
            Route::get('/add-user', 'addUser')->name('owner.addUser');
            Route::get('/add-supplier', 'addSupplier')->name('owner.addSupplier');
            Route::get('/users-list', 'usersList')->name('owner.usersList');
            Route::get('/supplier-list', 'supplierList')->name('owner.supplierList');
            Route::get('/view-profile-customer', 'viewProfileCustomer')->name('owner.viewProfileCustomer');
            Route::get('/view-profile-supplier', 'viewProfileSupplier')->name('owner.viewProfileSupplier');
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
            Route::get('/keuangan', 'index10')->name('akuntan.keuangan');
        });
        Route::controller(TagihanController::class)->group(function () {
            Route::get('/tagihan-edit', 'tagihanEdit')->name('akuntan.tagihanEdit');
            Route::get('/tagihan-list', 'tagihanList')->name('akuntan.tagihanList');
            Route::get('/tagihan-preview', 'tagihanPreview')->name('akuntan.tagihanPreview');
        });
    });
});

Route::controller(AuthenticationController::class)->group(function () {
    Route::get('/forgotpassword', 'forgotPassword')->name('forgotPassword');
    Route::get('/login',  'loginPage')->name('login');
    Route::post('/login',  'loginPost')->name('loginPost');
    Route::post('/logout',  'logout')->name('logout');
});





