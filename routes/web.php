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

Route::statamic('/cart', 'cart', ['title' => 'Your Cart']);

Route::redirect('/checkout', '/checkout/information');
Route::statamic('/checkout/information', 'checkout.information', ['title' => 'Checkout - Information']);
Route::statamic('/checkout/shipping', 'checkout.shipping', ['title' => 'Checkout - Shipping']);
Route::statamic('/checkout/payment', 'checkout.payment', ['title' => 'Checkout - Payment']);
Route::statamic('/checkout/complete', 'checkout.complete', ['title' => 'Checkout - Complete']);

Route::statamic('/checkout/offsite/mollie', 'checkout.offsite.mollie');
Route::statamic('/checkout/offsite/paypal', 'checkout.offsite.paypal');
