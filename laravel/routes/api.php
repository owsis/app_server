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


Route::get('/marketing', 'T002Controller@marketings');
Route::post('/marketing/reg', 'T002Controller@register');
Route::post('/marketing/login', 'T002Controller@login');


Route::get('/units', 'T003Controller@get');


Route::post('/customer', 'T004Controller@post');


Route::post('/trans/{revCode}/{unitCode}', 'T101Controller@post');
