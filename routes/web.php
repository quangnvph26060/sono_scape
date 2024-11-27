<?php

use App\Http\Controllers\Backend\CompanyController;
use App\Http\Controllers\Backend\DashboardController;
use Illuminate\Support\Facades\Route;

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
    Route::get('/', [DashboardController::class, 'index'])->name('index');

    Route::prefix('/company')->name('company.')->group(function () {
        Route::get('/', [CompanyController::class, 'index'])->name('index');
        Route::get('/search', [CompanyController::class, 'search'])->name('search');
        Route::delete('/delete/{id}', [CompanyController::class, 'delete'])->name('delete');
        Route::post('/update/{id}', [CompanyController::class, 'update'])->name('update');
        Route::post('/store', [CompanyController::class, 'store'])->name('store');
        Route::get('/detail/{id}', [CompanyController::class, 'detail'])->name('detail');
    });
});
