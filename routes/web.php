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


Auth::routes();

Route::get('/', 'HomeController@index')->name('/');

Route::resource('products', 'FrontProductsController', ['only' => ['index', 'show']]);
Route::get('Search','FrontProductsController@search')->name('search');

Route::resource('users', 'FrontUsersController', ['only' => ['show', 'edit', 'update', 'destroy']]);

Route::resource('carts', 'FrontCartController', ['only' => ['index', 'store', 'destroy']]);

Route::resource('orders', 'FrontOrdersController', ['only' => ['store', 'edit', 'update', 'destroy']]);