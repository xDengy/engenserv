<?php

use App\Http\Controllers\StaticController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [StaticController::class, 'welcome'])->name('home');
Route::get('/catalog/{code?}/', [StaticController::class, 'catalog'])->where('code', '.*')->name('catalog');
Route::get('/novinki/', [StaticController::class, 'novinki'])->name('novinki');
Route::get('/catalog/{code}/', [StaticController::class, 'catalogDetail'])->name('catalogDetail');
Route::get('/partnership/', [StaticController::class, 'partnership'])->name('partnership');
Route::get('/news/', [StaticController::class, 'news'])->name('news');
Route::get('/about/', [StaticController::class, 'about'])->name('about');
Route::get('/dev/', [StaticController::class, 'dev'])->name('dev');
Route::get('/contacts/', [StaticController::class, 'contacts'])->name('contacts');
Route::get('/cart/', [StaticController::class, 'cart'])->name('cart');
Route::get('/offer/', [StaticController::class, 'offer'])->name('offer');
