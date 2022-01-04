<?php

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


use Illuminate\Support\Facades\Auth;

Auth::routes();

Route::livewire('/', 'home')->name('home');

Route::livewire('/product', 'product-index')->name('products');

Route::livewire('/product/liga/{id}', 'product-liga')->name('product.liga');
Route::livewire('/product/{id}', 'product-detail')->name('product.detail');

Route::livewire('/keranjang', 'keranjang')->name("keranjang");

Route::livewire('/checkout', 'checkout')->name('checkout');

Route::livewire('/history', 'history')->name('history');
