<?php

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
 */

Route::get('/', 'T002Controller@api');

Route::get('/marketing', 'T002Controller@marketings');
Route::get('/marketing/{code}', 'T002Controller@updateUser');
Route::post('/marketing/reg/{refFrom}', 'T002Controller@register');
Route::post('/marketing/img/{code}', 'T002Controller@registerUpload');
Route::post('/marketing/login', 'T002Controller@login');
Route::post('/marketing/update/{code}', 'T002Controller@updateData');
Route::get('/marketing/saldo/{code_u}', 'T002Controller@getSaldo');
Route::get('/marketing/pic/{img}', 'T002Controller@getImg');

Route::get('/developer', 'T009Controller@get');

Route::get('/newunits', 'T008Controller@get');
Route::get('/units/{type}/{block}', 'T003Controller@get');
Route::get('/unitblocks/{type}', 'T003Controller@getBlock');
Route::get('/unitupdate', 'T003Controller@update');

Route::get('/customer/{email}/{branchcode}', 'T004Controller@get');
Route::post('/customer', 'T004Controller@post');

Route::post('/unit/pm', 'T004Controller@post');
Route::get('/unit/pm/{type}', 'T004Controller@get');
Route::get('/unit/fp/{type}', 'T005Controller@get');
Route::post('/unit/fp', 'T005Controller@post');
Route::get('/unit/price/{code}', 'T006Controller@get');
Route::get('/add/promo', 'T007Controller@get');
Route::post('/add/promo', 'T007Controller@post');

Route::get('/trans/jual/{refFrom}', 'T101Controller@getPenjual');
Route::get('/trans/beli/{code}', 'T101Controller@getPembeli');
Route::get('/trans/beli/order/{code}', 'T101Controller@getOrder');
Route::get('/trans/order/{code}', 'T101Controller@getUnitOrder');
Route::post('/trans/{refFrom}/{unitCode}/{codeUser}', 'T101Controller@post');

Route::get('/cekutj/{code_u}/{type_u}', 'T102Controller@getOrder');
// Route::post('/saldoorder/exe/{code_u}', 'T102Controller@exeOrder');
// Route::get('/saldoavailable/{code_u}', 'T102Controller@getAvailable');
Route::post('/utj', 'T102Controller@post');
Route::post('/saldo/update/{orderId}', 'T102Controller@update');
Route::delete('/saldodelete/{code_u}', 'T102Controller@delete');

Route::post('/vt_notif', 'VTController@notif');
Route::post('/vt_cancel/{orderid}', 'VTController@cancelVT');

Route::get('/saldomidtrans/{codeUser}', 'T102Controller@getMidtrans');
Route::post('/saldomidtrans/{codeUser}', 'T102Controller@postMidtrans');
