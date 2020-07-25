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

// Route::statamic('example', 'example-view', [
//    'title' => 'Example'
// ]);

Route::statamic('/cart', 'cart');
Route::statamic('/cart/shipping', 'cart-shipping');
Route::statamic('/checkout', 'checkout');
Route::statamic('/checkout/confirmed', 'checkout-confirmed');