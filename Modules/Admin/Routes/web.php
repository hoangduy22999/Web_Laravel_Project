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

Route::group(['prefix' => 'admin', 'middleware'=>'web', 'namespace' => '\Modules\Admin\Http\Controllers'], function() {

    Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
    Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.post-login');

    Route::group(['middleware' => 'auth.admin'], function () {
        Route::get('/dashboard', 'AdminController@index')->name('admin.dashboard');
        Route::get('/product-list', 'ProductController@index')->name('admin.product.list');
        Route::get('/product-create', 'ProductController@showCreateForm')->name('admin.product.create');
        Route::post('/product-create', 'ProductController@create')->name('admin.product.post-create');
        Route::get('/render-property-form', 'ProductController@renderPropertyForm')->name('admin.product.renderform');
        Route::get('/product-edit/{id}', 'ProductController@showEditForm')->name('admin.product.edit');
        Route::post('/product-edit', 'ProductController@edit')->name('admin.product.post-edit');
        Route::get('/logout', 'Auth\AdminLoginController@logout')->name('admin.logout');
    });

});
