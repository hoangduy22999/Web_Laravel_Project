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

use Illuminate\Support\Facades\Route;

Route::group(['prefix' => '/', 'middleware'=>'web', 'namespace' => '\Modules\Web\Http\Controllers'], function() {

    Route::get('/', 'ProductController@index')->name('home');
    Route::get('/product-detail/{id}', 'ProductController@showDetail')->name('product.detail');
    Route::get('/search', 'ProductController@search')->name('product.search');
    Route::post('/login', 'Auth\LoginController@login')->name('web.post-login');
    Route::post('/register', 'Auth\RegisterController@register')->name('web.post-register');
    Route::post('/add-cart', 'CartController@addProductToCart')->name('product.add-cart');
    Route::group(['middleware' => 'guest:web'], function () {
        Route::get('/cart', 'CartController@showCart')->name('product.show-cart');
        Route::post('/update-cart', 'CartController@updateCart')->name('product.update-cart');
        Route::post('/remove-cart', 'CartController@removeItemInCart')->name('product.remove-item');
        //Route::get('/checkout', 'CartController@checkout')->name('web.checkout');
        //Route::get('/checkout-success', 'CartController@checkoutSuccess')->name('web.checkout.success');
        Route::get('/account', 'AccountController@index')->name('account');
        Route::get('/logout', 'Auth\LoginController@logout')->name('web.logout');
        Route::get('/checkout', 'CheckoutController@checkout')->name('web.checkout');
        Route::get('/save-checkout-customer', 'CheckoutController@save_checkout_customer')->name('web.save_checkout_customer');
        Route::get('/success/{shipping_id}', 'CheckoutController@success')->name('web.success');
        Route::get('/remove-order/{order_id}', 'OrderhistoryController@remove_order')->name('web.remove_order');
        Route::get('/order-history', 'OrderhistoryController@order_history')->name('web.order_history');
        Route::get('order-history/view-ordered/{ordered_id}', 'OrderhistoryController@view_ordered')->name('web.view_ordered');

    });

});
