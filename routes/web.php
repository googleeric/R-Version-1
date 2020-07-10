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

Route::get('/', function () {
    return view('index');
});

Route::get('/playstation', function () {
    return view('playstation');
});
Route::get('/shop-list', function () {
    return view('shop-list');
});

Route::get('/product/{id}',[
    'uses' => 'ProductController@singleproduct',
    'as' => 'shop.singleproduct'
]);

Route::get('/shop-grid',[
    'uses' => 'ProductController@products',
    'as' => 'shop.product'
]);

Route::post('/booking-product',[
    'uses' => 'ProductController@bookingProduct',
    'as' => 'shop.bookingProduct'
]);

Route::get('/booking-cart',[
    'uses' => 'ProductController@bookingCart',
    'as' => 'shop.bookingCart'
]);