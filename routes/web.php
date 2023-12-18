<?php

use App\Http\Controllers\StaticController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\OrderController;
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
Route::get('/contacts/', [StaticController::class, 'contacts'])->name('contacts');
Route::get('/cart/', [StaticController::class, 'cart'])->name('cart');
Route::get('/offer/', [StaticController::class, 'offer'])->name('offer');

Route::get('/cart/add/{product}', [CartController::class, 'add'])->name('cart.add');
Route::get('/cart/remove/{product}', [CartController::class, 'remove'])->name('cart.remove');
Route::get('/cart/update', [CartController::class, 'update'])->name('cart.update');
Route::get('/cart/update-cart', [CartController::class, 'updateCart'])->name('cart.update.product');
Route::get('/cart/clear', [CartController::class, 'clear'])->name('cart.clear');

Route::post('/order/create', [OrderController::class, 'create'])->name('order.create');
Route::get('/order/complete', [OrderController::class, 'complete'])->name('order.complete');
Route::get('/order/{order}/delete/{product}', [OrderController::class, 'deleteProduct'])->name(
    'order.product.delete'
);
