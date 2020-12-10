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

    Route::group(['middleware' => 'web'], function () {

    });

});
