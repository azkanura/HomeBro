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

Route::get('/users', 'UserController@index')->name('users')->middleware('auth');
Route::post('user/save', 'UserController@save')->name('user.save')->middleware('auth');
Route::get('user/delete/{id}', 'UserController@delete')->name('user.delete')->middleware('auth');

Route::get('/kitapay/users', 'KitapayController@displayUsers')->name('kitapay.users')->middleware('auth');
Route::get('/kitapay/user/{id}', 'KitapayController@displayUser')->name('kitapay.user')->middleware('auth');
Route::get('/kitapay/user/disable-transaction/{id}', 'KitapayController@disableTransaction')->name('kitapay.disable.transaction')->middleware('auth');
Route::get('/kitapay/user/enable-transaction/{id}', 'KitapayController@enableTransaction')->name('kitapay.enable.transaction')->middleware('auth');

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
Route::get('/home', 'HomeController@index');
