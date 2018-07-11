<?php

use Illuminate\Http\Request;

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
Route::post('/marketing/login', 'T002Controller@login');
Route::get('/marketing/nup/{code_u}', 'T002Controller@getNup');

Route::get('/developer', 'T009Controller@get');

Route::get('/newunits', 'T008Controller@get');
Route::get('/units/{type}/{block}', 'T003Controller@get');
Route::get('/unitblocks/{type}', 'T003Controller@getBlock');


Route::get('/customer/{email}/{branchcode}', 'T004Controller@get');
Route::post('/customer', 'T004Controller@post');


Route::post('/add/pm', 'T006Controller@post');
Route::get('/add/pm', 'T006Controller@get');
Route::get('/add/fp', 'T005Controller@get');
Route::post('/add/fp', 'T005Controller@post');
Route::get('/add/promo', 'T007Controller@get');
Route::post('/add/promo', 'T007Controller@post');

Route::get('/trans-beli/{email}', 'T101Controller@getPembeli');
Route::get('/trans/{revCode}', 'T101Controller@get');
Route::post('/trans/{revCode}/{unitCode}', 'T101Controller@post');

Route::get('/nuppending/{code_u}', 'T102Controller@getPending');
Route::get('/nupavailable/{code_u}', 'T102Controller@getAvailable');
Route::post('/nup', 'T102Controller@post');
Route::delete('/nupdelete/{code_u}', 'T102Controller@delete');
