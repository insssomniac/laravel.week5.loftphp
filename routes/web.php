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

//Frontend routes
Route::get('/', 'IndexController@index')->name('main');
Route::get('/about', 'AboutController@index')->name('about');
Route::get('/cart', 'CartController@index')->name('cart');
Route::get('/category', 'CategoryController@index')->name('category');
Route::get('/news', 'NewsController@index')->name('news');
Route::get('/newsview', 'NewsController@newsview')->name('newsview');
Route::get('/orders', 'OrdersController@index')->name('orders');

//Admin routes
Route::group(['namespace' => 'Admin', 'middleware' => 'admin'], function() {
    Route::get('/admin/dashboard', 'DashboardController@index')->name('admin.dashboard');
    Route::get('/admin/categories', 'CategoriesController@index')->name('admin.categories');
});


