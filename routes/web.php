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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();
Route::post('shopping/stock/store', 'ShoppingController@stockstore')->name('shopping.stockstore');
Route::get('shopping/{id}', 'ShoppingController@destroy')->name('shopping.destroy');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('shopping', 'ShoppingController@index')->name('shopping.index');
Route::get('shopping/create', 'ShoppingController@create')->name('shopping.create');
Route::put('shopping/{id}', 'ShoppingController@update');
Route::get('shopping/create/{id}', 'ShoppingController@edit')->name('shopping.edit');
Route::get('shopping/stock/{id}', 'ShoppingController@stock')->name('shopping.stock');

Route::post('shopping/store', 'ShoppingController@store')->name('shopping.store');

