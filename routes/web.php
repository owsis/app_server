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
    return view('welcome');
});

Auth::routes();

Route::get('/admin', 'T001Controller@index')->name('admin');

Route::get('/inadmin', 'AuthT001\LoginController@loginAdmin');
Route::post('/inadmin', 'AuthT001\LoginController@login');

// Route::get('/regadmin', 'AuthT001\RegisterController@regAdmin');
// Route::post('/regadmin', 'AuthT001\RegisterController@create');

