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
    Route::get('/admin', 'DashboardController@index')->name('admin.dashboard');

    //Categories
    Route::group(['prefix' => '/admin/categories'], function (){
        Route::get('/', 'CategoriesController@index')->name('admin.categories');
        Route::get('/create', 'CategoriesController@create')->name('admin.categories.create');
        Route::post('/add', 'CategoriesController@add')->name('admin.categories.add');
        Route::get('/edit/{category}', 'CategoriesController@edit')->name('admin.categories.edit');
        Route::post('/update/{category}', 'CategoriesController@update')->name('admin.categories.update');
        Route::get('/delete/{category}', 'CategoriesController@delete')->name('admin.categories.delete');
    });


});


