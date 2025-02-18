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
use App\Http\Controllers\CryptocurrencyController;

Route::get('/', function () {
    return auth()->check() ? redirect('/admin') : redirect('/login');
});


Route::middleware('auth')->group(function () {
    Route::prefix("admin")->group(function () {
        Route::controller(DashboardController::class)->group(function () {;
            Route::get('/', 'index')->name('index');
            Route::get('/sensor','sensor')->name('sensor');
        });
    });
});


Route::controller(AuthenticationController::class)->group(function () {
    Route::get('/forgotpassword', 'forgotPassword')->name('forgotPassword');
    Route::get('/login',  'loginPage')->name('login');
    Route::post('/login',  'loginPost')->name('loginPost');
    Route::post('/logout',  'logout')->name('logout');
    Route::get('/signup', 'signup')->name('signup');
});

Route::controller(HomeController::class)->group(function () {
    Route::get('calendar','calendar')->name('calendar');
    Route::get('chatmessage','chatMessage')->name('chatMessage');
    Route::get('chatempty','chatempty')->name('chatempty');
    Route::get('email','email')->name('email');
    Route::get('error','error1')->name('error');
    Route::get('faq','faq')->name('faq');
    Route::get('gallery','gallery')->name('gallery');
    Route::get('kanban','kanban')->name('kanban');
    Route::get('pricing','pricing')->name('pricing');
    Route::get('termscondition','termsCondition')->name('termsCondition');
    Route::get('widgets','widgets')->name('widgets');
    Route::get('chatprofile','chatProfile')->name('chatProfile');
    Route::get('veiwdetails','veiwDetails')->name('veiwDetails');
    Route::get('blankPage','blankPage')->name('blankPage');
    Route::get('comingSoon','comingSoon')->name('comingSoon');
    Route::get('maintenance','maintenance')->name('maintenance');
    Route::get('starred','starred')->name('starred');
    Route::get('testimonials','testimonials')->name('testimonials');
    });

    // aiApplication
// Route::prefix('aiapplication')->group(function () {
//     Route::controller(AiapplicationController::class)->group(function () {
//         Route::get('/codegenerator', 'codeGenerator')->name('codeGenerator');
//         Route::get('/codegeneratornew', 'codeGeneratorNew')->name('codeGeneratorNew');
//         Route::get('/imagegenerator','imageGenerator')->name('imageGenerator');
//         Route::get('/textgeneratornew','textGeneratorNew')->name('textGeneratorNew');
//         Route::get('/textgenerator','textGenerator')->name('textGenerator');
//         Route::get('/videogenerator','videoGenerator')->name('videoGenerator');
//         Route::get('/voicegenerator','voiceGenerator')->name('voiceGenerator');
//     });
// });


// chart
Route::prefix('chart')->group(function () {
    Route::controller(ChartController::class)->group(function () {
        Route::get('/columnchart', 'columnChart')->name('columnChart');
        Route::get('/linechart', 'lineChart')->name('lineChart');
        Route::get('/piechart', 'pieChart')->name('pieChart');
    });
});

// Componentpage
Route::prefix('componentspage')->group(function () {
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
});

// Forms
Route::prefix('Forms')->group(function () {
    Route::controller(FormsController::class)->group(function () {
        Route::get('/form-layout', 'formLayout')->name('formLayout');
        Route::get('/form-validation', 'formValidation')->name('formValidation');
        Route::get('/form', 'form')->name('form');
        Route::get('/wizard', 'wizard')->name('wizard');
    });
});

// invoice/invoiceList
Route::prefix('barang')->group(function () {
    Route::controller(BarangController::class)->group(function () {
        Route::get('/barang', 'barang')->name('barang');
        Route::get('/barang-edit', 'barangEdit')->name('barangEdit');
        Route::get('/produkbarang', 'barangList')->name('barangList');
        Route::get('/barang-preview', 'barangPreview')->name('barangPreview');
    });
});

// invoice/LoansList
// invoice/tagihanList
Route::prefix('tagihan')->group(function () {
    Route::controller(TagihanController::class)->group(function () {
        // Route::get('/tagihan', 'Financetagihan')->name('Financetagihan');
        Route::get('/tagihan-edit', 'tagihanEdit')->name('tagihanEdit');
        Route::get('/tagihan-list', 'tagihanList')->name('tagihanList');
        Route::get('/tagihan-preview', 'tagihanPreview')->name('tagihanPreview');
    });
});

// Settings
Route::prefix('settings')->group(function () {
    Route::controller(SettingsController::class)->group(function () {
        Route::get('/company', 'company')->name('company');
        Route::get('/currencies', 'currencies')->name('currencies');
        Route::get('/language', 'language')->name('language');
        Route::get('/notification', 'notification')->name('notification');
        Route::get('/notification-alert', 'notificationAlert')->name('notificationAlert');
        Route::get('/payment-gateway', 'paymentGateway')->name('paymentGateway');
        Route::get('/theme', 'theme')->name('theme');
    });
});

// Table
Route::prefix('table')->group(function () {
    Route::controller(TableController::class)->group(function () {
        Route::get('/tablebasic', 'tableBasic')->name('tableBasic');
        Route::get('/tabledata', 'tableData')->name('tableData');
    });
});

// Users
    Route::controller(UsersController::class)->group(function () {
        Route::get('/add-user', 'addUser')->name('addUser');
        Route::get('/add-supplier', 'addSupplier')->name('addSupplier');
        Route::get('/users-list', 'usersList')->name('usersList');
        Route::get('/supplier-list', 'supplierList')->name('supplierList');
        Route::get('/view-profile-customer', 'viewProfileCustomer')->name('viewProfileCustomer');
        Route::get('/view-profile-supplier', 'viewProfileSupplier')->name('viewProfileSupplier');
    });

// Users
    Route::controller(BlogController::class)->group(function () {
        Route::get('/addBlog', 'addBlog')->name('addBlog');
        Route::get('/blog', 'blog')->name('blog');
        Route::get('/blogDetails', 'blogDetails')->name('blogDetails');
    });


// Users
Route::prefix('roleandaccess')->group(function () {
    Route::controller(RoleandaccessController::class)->group(function () {
        Route::get('/assignRole', 'assignRole')->name('assignRole');
        Route::get('/roleAaccess', 'roleAaccess')->name('roleAaccess');
    });
});

// Users
Route::prefix('cryptocurrency')->group(function () {
    Route::controller(CryptocurrencyController::class)->group(function () {
        Route::get('/marketplace', 'marketplace')->name('marketplace');
        Route::get('/marketplacedetails', 'marketplaceDetails')->name('marketplaceDetails');
        Route::get('/portfolio', 'portfolio')->name('portfolio');
        Route::get('/wallet', 'wallet')->name('wallet');
    });
});
