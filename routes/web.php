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

Route::get('/kitaumroh/registrations/{page}', 'KitaumrohController@displayRegistrations')->name('kitaumroh.registrations')->middleware('auth');
Route::get('/kitaumroh/registration/{id}', 'KitaumrohController@displayRegistration')->name('kitaumroh.registration')->middleware('auth');
Route::get('/kitaumroh/packages', 'KitaumrohController@displayPackages')->name('kitaumroh.packages')->middleware('auth');
Route::get('/kitaumroh/package/{id}', 'KitaumrohController@displayPackage')->name('kitaumroh.package')->middleware('auth');

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
Route::get('/home', 'HomeController@index');

Route::get('/products','ProductController@displayProducts')->name('products')->middleware('auth');
Route::get('/products/{id}','ProductController@displayProduct')->name('product')->middleware('auth');

Route::get('/promotions','PromotionController@displayPromotions')->name('promotions')->middleware('auth');
Route::get('/promotions/{id}','PromotionController@displayPromotion')->name('promotion')->middleware('auth');

Route::get('/stations','StationController@displayStations')->name('stations')->middleware('auth');
Route::get('/stations/{id}','StationController@displayStation')->name('station')->middleware('auth');

Route::get('/vouchers','VoucherController@displayVouchers')->name('vouchers')->middleware('auth');
Route::get('/vouchers/{id}','VoucherController@displayVoucher')->name('voucher')->middleware('auth');

Route::get('/faqs','FaqController@displayFaqs')->name('faqs')->middleware('auth');
Route::get('/faqs/{id}','FaqController@displayFaq')->name('faq')->middleware('auth');

Route::get('/messages','MessageController@displayMessages')->name('messages')->middleware('auth');
Route::get('/messages/{id}','MessageController@displayMessage')->name('message')->middleware('auth');

Route::get('/dashboard','DashboardController@index')->name('dashboard')->middleware('auth');
Route::get('/message','MessageController@index')->name('message')->middleware('auth');

Route::get('/customers','CustomerController@displayCustomers')->name('customers')->middleware('auth');
Route::get('/customers/{id}','CustomerController@displayCustomer')->name('customer')->middleware('auth');
