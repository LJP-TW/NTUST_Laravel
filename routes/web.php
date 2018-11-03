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

//Route::get('/', 'HomeController@index');

//Route::get('/user/{name?}', function ($name = 'Nobody') {
//    /*
//    後面接問號代表參數可給可不給
//    但那就要在 function parameter 給預設值
//    */
//    return 'Hi, ' . strtoupper($name);
//});

//Route::get('products', 'ProductController@index')->name(products.index);

Route::get('/', 'DashboardController@index')->name('dashboard.index');

Route::get('/products', 'ProductController@index')->name('products.index');

Route::get('/products/create', 'ProductController@create')->name('products.create');

Route::post('/products', 'ProductController@store')->name('products.store');

// show

Route::get('/products/{product}/edit', 'ProductController@edit')->name('products.edit');

Route::patch('/products/{product}', 'ProductController@update')->name('products.update');

// destroy
