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
Route::post('/marketing/imgfp/{code}', 'T002Controller@uploadFp');
Route::post('/marketing/login', 'T002Controller@login');
Route::post('/marketing/update/{code}', 'T002Controller@updateData');
Route::get('/marketing/saldo/{code_u}', 'T002Controller@getSaldo');
Route::get('/marketing/pic/{img}', 'T002Controller@getImg');

Route::get('/developer', 'T009Controller@get');

Route::get('/newunits', 'T008Controller@get');
Route::get('/units/{type}/{block}', 'T003Controller@get');
Route::get('/unitblocks/{type}', 'T003Controller@getBlock');
Route::get('/unit/key/{name}', 'T003Controller@getKeyUnit');

Route::get('/customer/{email}/{branchcode}', 'T004Controller@get');
Route::post('/customer', 'T004Controller@post');

Route::post('/pm', 'T004Controller@post');
Route::get('/pm/{type}', 'T004Controller@get');
Route::get('/price/{code}', 'T006Controller@get');
Route::get('/add/promo', 'T007Controller@get');
Route::post('/add/promo', 'T007Controller@post');

Route::get('/trans/utj/{code}', 'T102Controller@getUtj');
Route::get('/trans/jual/{refFrom}', 'T101Controller@getPenjual');
Route::get('/trans/beli/{code}', 'T101Controller@getBeli');
Route::get('/trans/beli/order/{code}', 'T101Controller@getOrder');
Route::get('/trans/order/{code}', 'T101Controller@getUnitOrder');
Route::post('/trans/{refFrom}', 'T101Controller@post');

Route::get('/cekkey/{code_u}/{code_k}', 'T102Controller@cekKey');
Route::get('/key', 'T005Controller@get');
Route::get('/key/available/{code_u}', 'T102Controller@keyAvailable');
Route::get('/key/settlement/{code_u}', 'T102Controller@keySettlement');
Route::get('/key/pending/{code_u}', 'T102Controller@pendKey');
Route::delete('/key/delete/{code_u}', 'T102Controller@deleteKey');
// Route::post('/saldoorder/exe/{code_u}', 'T102Controller@exeOrder');
// Route::get('/saldoavailable/{code_u}', 'T102Controller@getAvailable');
Route::post('/key', 'T102Controller@post');
Route::post('/saldo/update/{orderId}', 'T102Controller@update');

Route::post('/vt_notif', 'VTController@notif');
Route::post('/vt_cancel/{orderid}', 'VTController@cancelVT');

Route::get('/headerimg', 'T011Controller@get');
Route::get('/about/unit/{type_u}', 'T012Controller@get');
