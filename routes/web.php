<?php

use Illuminate\Support\Facades\Route;
use Statamic\Facades\Site;

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

Site::all()->each(function (Statamic\Sites\Site $site) {
    Route::prefix($site->url())->group(function () {
        Route::statamic('/cart', 'cart', ['title' => 'Your Cart']);

        Route::redirect('/checkout', '/checkout/information');
        Route::statamic('/checkout/information', 'checkout.information', ['title' => 'Checkout']);
        Route::statamic('/checkout/shipping', 'checkout.shipping', ['title' => 'Checkout']);
        Route::statamic('/checkout/payment', 'checkout.payment', ['title' => 'Checkout']);
        Route::statamic('/checkout/complete', 'checkout.complete', ['title' => 'Checkout']);

        Route::statamic('/checkout/offsite/mollie', 'checkout.offsite.mollie');
        Route::statamic('/checkout/offsite/paypal', 'checkout.offsite.paypal');
    });
});
