<?php

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

Route::statamic('/cart', 'cart');

Route::prefix('/checkout')->name('checkout.')->group(function () {
	Route::redirect('/', '/checkout/email');
	Route::statamic('/email', 'checkout/email', ['layout' => 'checkout/layout'])->name('email');
	Route::statamic('/account', 'checkout/account', ['layout' => 'checkout/layout'])->name('account');
	Route::statamic('/address', 'checkout/address', ['layout' => 'checkout/layout'])->name('address');
	Route::statamic('/shipping', 'checkout/shipping', ['layout' => 'checkout/layout'])->name('shipping');
	Route::statamic('/payment', 'checkout/payment', ['layout' => 'checkout/layout'])->name('payment');
	Route::statamic('/complete', 'checkout/complete', ['layout' => 'checkout/layout'])->name('complete');
});