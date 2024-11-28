<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\NewsController;
use App\Http\Controllers\Backend\BannerController;
use App\Http\Controllers\Backend\SliderController;
use App\Http\Controllers\Backend\CompanyController;
use App\Http\Controllers\Backend\ContactController;
use App\Http\Controllers\Backend\Auth\AuthController;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\SupportPolicyController;
use App\Http\Controllers\Backend\ProductController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('admin')->name('admin.')->group(function () {

    route::middleware('guest')->group(function () {
        Route::get('login', [AuthController::class, 'login'])->name('login');

        Route::post('login', [AuthController::class, 'authenticate']);
    });

    route::middleware('auth')->group(function () {
        Route::get('logout', [AuthController::class, 'logout'])->name('logout');

        Route::get('/', [DashboardController::class, 'index'])->name('index');

        Route::prefix('/company')->name('company.')->group(function () {
            Route::get('/', [CompanyController::class, 'index'])->name('index');
            Route::get('/search', [CompanyController::class, 'search'])->name('search');
            Route::delete('/delete/{id}', [CompanyController::class, 'delete'])->name('delete');
            Route::post('/update/{id}', [CompanyController::class, 'update'])->name('update');
            Route::post('/store', [CompanyController::class, 'store'])->name('store');
            Route::get('/detail/{id}', [CompanyController::class, 'detail'])->name('detail');
        });

        route::controller(ContactController::class)->group(function () {
            route::get('contact', 'show')->name('contact.show');
            route::post('contact', 'update')->name('contact.update');
        });

        Route::prefix('/support-policy')->name('supportPolicy.')->group(function () {
            Route::get('/', [SupportPolicyController::class, 'index'])->name('index');
            Route::get('/search', [SupportPolicyController::class, 'search'])->name('search');
            Route::delete('/delete/{id}', [SupportPolicyController::class, 'delete'])->name('delete');
            Route::post('/update/{id}', [SupportPolicyController::class, 'update'])->name('update');
            Route::post('/store', [SupportPolicyController::class, 'store'])->name('store');
            Route::get('/detail/{id}', [SupportPolicyController::class, 'detail'])->name('detail');
        });

        // BANNER ROUTE
        Route::controller(SliderController::class)->name('slider.')->group(function () {
            Route::get('sliders', 'index')->name('index');
            Route::get('sliders/create/{type}', 'create')->name('create');
            Route::post('sliders/store/{type}', 'store')->name('store');
        });

        // NEWS ROUTE
        Route::resource('news', NewsController::class);
        Route::post('news/change-status', [NewsController::class, 'changeStatus'])->name('news.change-status');

        Route::prefix('/product')->name('product.')->group(function () {
            Route::get('/', [ProductController::class, 'index'])->name('index');
            Route::get('/search', [ProductController::class, 'search'])->name('search');
            Route::delete('/delete/{id}', [ProductController::class, 'delete'])->name('delete');
            Route::post('/update/{id}', [ProductController::class, 'update'])->name('update');
            Route::post('/store', [ProductController::class, 'store'])->name('store');
            Route::get('/detail/{id}', [ProductController::class, 'detail'])->name('detail');
            Route::get('/add', [ProductController::class, 'add'])->name('add');
        });
    });
});
