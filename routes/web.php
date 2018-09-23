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

Route::get('/hola', 'TestController@text');
Route::get('/catalog', 'ProductController@catalog');
Route::get('/contact', 'ProductController@contact');
Route::get('/checkout', 'ProductController@checkout');
Route::get('/cart', 'ProductController@cart');

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

