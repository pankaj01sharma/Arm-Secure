<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/','FirstController@index');
Route::get('/index','FirstController@index');
Route::post('alarm_biller/site','FirstController@site');
Route::get('/customer_display','FirstController@customer_display');

Route::get('/new_work_order_1','FirstController@new_work_order_1');

Route::get('/proposal','FirstController@proposal');

Route::get('/site','FirstController@site');

Route::get('/site_detail','FirstController@site_detail');

Route::get('/cust_rmr','FirstController@cust_rmr');

Route::get('/rfc','FirstController@rfc');

Route::get('/site_add','FirstController@site_add');

