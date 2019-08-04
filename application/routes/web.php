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

Route::get('/', 'OrderController@index');
Route::get('/showmap/{customerId?}', 'HomeController@showMap');

Route::get('/order', 'OrderController@index');
Route::post('/order/ajaxdata', 'OrderController@getOrderData');

Route::get('/productbrand', 'DataMasterController@productBrand');
Route::post('/productbrand/ajaxdata', 'DataMasterController@getProductBrand');

Route::get('/product', 'DataMasterController@product');
Route::post('/product/ajaxdata', 'DataMasterController@getProduct');

Route::get('/customer', 'DataMasterController@customer');
Route::post('/customer/ajaxdata', 'DataMasterController@getCustomer');

Route::get('/shippingaddress', 'DataMasterController@shippingAddress');
Route::post('/shippingaddress/ajaxdata', 'DataMasterController@getshippingAddress');

Route::get('/api/brand/{type?}', 'RestController@brand');
Route::get('/api/product/{type?}', 'RestController@product');
Route::get('/api/customer/{type?}', 'RestController@customer');
Route::get('/api/shipping_address/{type?}', 'RestController@shipping_address');
