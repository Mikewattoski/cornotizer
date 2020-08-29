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
Route::prefix('admin')->group(function(){
	Route::middleware('auth:admin')->group(function(){
Route::get('/','dashboardcontroller@index');
Route::resource('/product','ProductController');
Route::resource('/shop','ShopController');
Route::resource('/order','OrderController');
Route::get('/confirm/{id}','OrderController@confirm')->name('order.confirm');
Route::get('/pending/{id}','OrderController@pending')->name('order.pending');
Route::resource('/users','UserController');
});
Route::get('/login','AdminuserController@index')->name('login');
Route::post('/login','AdminuserController@store');
Route::get('/logout','AdminuserController@logout');

});

Route::get('/','Front\HomeController@index');
Route::get('/ca/{id}','Front\HomeController@shop')->name('sh');
Route::get('/user/register','Front\RegistrationController@index');
Route::post('/user/register','Front\RegistrationController@store');
Route::get('/user/login','Front\sessionController@index')->name('login');
Route::post('/user/login','Front\sessionController@store');
Route::get('/user/logout','Front\sessionController@logout');

Route::get('/user/profile','Front\userprofileController@index');

Route::get('/user/order/{id}','Front\userprofileController@order');
Route::get('/cart','Front\cartController@index');

Route::post('/cart','Front\cartController@store')->name('cart');
Route::get('empty',function(){
	Cart::instance('default')->destroy();
});
Route::delete('/cart/remove/{product}','Front\cartController@destroy')->name('cart.destroy');
Route::post('/cart/save/{product}','Front\cartController@savefor')->name('cart.savefor');
Route::delete('/cart/saverem/{product}','Front\cartController@sdestroy')->name('savefor.destroy');
Route::post('/cart/savka/{product}','Front\cartController@mocart')->name('savefor.cart');

Route::get('/checkout','Front\checkoutController@index')->name('checkout');
Route::post('/checkout','Front\checkoutController@store')->name('checkoutcom');




