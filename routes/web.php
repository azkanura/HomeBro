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

Route::get('/', 'UserController@index');
Route::post('user/save', 'UserController@save');
Route::get('user/delete/{id}', 'UserController@delete');

Route::get('/kitapay/users', 'KitapayController@displayUsers');
Route::get('/kitapay/user/{id}', 'KitapayController@displayUser');
Route::get('/kitapay/user/disable-transaction/{id}', 'KitapayController@disableTransaction');
Route::get('/kitapay/user/enable-transaction/{id}', 'KitapayController@enableTransaction');
