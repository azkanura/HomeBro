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
Route::get('/login', 'Auth\LoginController@index');

Route::get('/', 'UserController@index')->middleware('auth');
Route::post('user/save', 'UserController@save')->middleware('auth');
Route::get('user/delete/{id}', 'UserController@delete')->middleware('auth');

Route::get('/kitapay/users', 'KitapayController@displayUsers')->middleware('auth');
Route::get('/kitapay/user/{id}', 'KitapayController@displayUser')->middleware('auth');
Route::get('/kitapay/user/disable-transaction/{id}', 'KitapayController@disableTransaction')->middleware('auth');
Route::get('/kitapay/user/enable-transaction/{id}', 'KitapayController@enableTransaction')->middleware('auth');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
