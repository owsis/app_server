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

Route::get('/in', 'AuthT001\LoginController@loginAdmin');
Route::post('/in', 'AuthT001\LoginController@login');

// Route::get('/regadmin', 'AuthT001\RegisterController@regAdmin');
// Route::post('/regadmin', 'AuthT001\RegisterController@create');

Route::get('/finish', 'VTController@finishVT');
Route::get('/fail', 'VTController@failVT');

Route::get('/unit', 'UnitController@index');
Route::get('/paymentype', function (){

    return view ('paymentype');
});

Route::get('/sample', 'TransaksiController@index');



Route::get('/carabayar', function (){

    return view ('carabayar');
});

Route::get('/inputcarabayar', function (){

    return view ('inputcarabayar');
});

Route::get('/closeunit', 'T001Controller@closeUnit');

Route::resource('transaksi','transaksicontroller');

Route::resource('unit','UnitController');

Route::resource('carabayar','carabayarcontroller');
