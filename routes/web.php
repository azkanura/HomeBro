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
Route::get('/profile', 'UserController@profile')->name('profile')->middleware('auth');

Route::post('edit-profile','UserController@editProfile')->name('edit.profile')->middleware('auth');

Route::post('change-password','UserController@changePassword')->name('change.password')->middleware('auth');

Route::post('user/save', 'UserController@save')->name('user.save')->middleware('auth');
Route::get('user/delete/{id}', 'UserController@delete')->name('user.delete')->middleware('auth');

Route::get('/kitapay/users/{page}', 'KitapayController@displayUsers')->name('kitapay.users')->middleware('auth');
Route::post('/kitapay/search-user', 'KitapayController@searchUser')->name('kitapay.search.user')->middleware('auth');
Route::get('/kitapay/user/{id}', 'KitapayController@displayUser')->name('kitapay.user')->middleware('auth');
Route::get('/kitapay/user/disable-transaction/{id}', 'KitapayController@disableTransaction')->name('kitapay.disable.transaction')->middleware('auth');
Route::get('/kitapay/user/enable-transaction/{id}','KitapayController@enableTransaction')->name('kitapay.enable.transaction')->middleware('auth');
Route::post('/kitapay/user/update-kita-saldo-status','KitapayController@updateKitaSaldoStatus')->name('kitapay.update.status')->middleware('auth');

Route::get('/kitaumroh/registrations/{page}', 'KitaumrohController@displayRegistrations')->name('kitaumroh.registrations')->middleware('auth');
Route::get('/kitaumroh/registration/{id}', 'KitaumrohController@displayRegistration')->name('kitaumroh.registration')->middleware('auth');
Route::get('/kitaumroh/packages', 'KitaumrohController@displayPackages')->name('kitaumroh.packages')->middleware('auth');
Route::get('/kitaumroh/package/{id}', 'KitaumrohController@displayPackage')->name('kitaumroh.package')->middleware('auth');

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
Route::get('/home', 'HomeController@index');
