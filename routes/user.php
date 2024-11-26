<?php

use App\Http\Controllers\Frontend\ContactController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\IntroduceController;
use App\Http\Controllers\Frontend\NewsController;
use App\Http\Controllers\Frontend\ProductController;
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

Route::get('/', [HomeController::class, 'home'])->name('home');

Route::get('gioi-thieu', [IntroduceController::class, 'introduce'])->name('introduce');

Route::get('san-pham/{slug?}', [ProductController::class, 'list'])->name('product.list');

Route::get('tin-tuc/{slug?}', [NewsController::class, 'list'])->name('news.list');

Route::get('lien-he', [ContactController::class, 'contact'])->name('contact');
