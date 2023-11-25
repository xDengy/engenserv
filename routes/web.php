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
Route::get('/catalog/', [StaticController::class, 'catalog'])->name('catalog');
Route::get('/catalog/{id}/', [StaticController::class, 'catalogDetail'])->name('catalogDetail');
Route::get('/partnership/', [StaticController::class, 'partnership'])->name('partnership');
