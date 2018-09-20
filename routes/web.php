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

Route::get('/dashboard', 'T001Controller@index')->name('dashboard');

Route::get('/in', 'AuthT001\LoginController@loginAdmin');
Route::post('/in', 'AuthT001\LoginController@login');

Route::get('/regadmin', 'AuthT001\RegisterController@regAdmin');
Route::post('/regadmin', 'AuthT001\RegisterController@create');

Route::get('/finish', 'VTController@finishVT');
Route::get('/fail', 'VTController@failVT');

//TABLE MASTER
Route::get('/unit', 'Master\UnitController@index');
Route::get('/harga', 'Master\HargaController@index');
Route::get('/carabayar', 'Master\CarabayarController@index');
Route::post('/carabayar/post', 'Master\CarabayarController@store');
Route::put('/carabayar/update/{id}', 'Master\CarabayarController@update');
Route::delete('/carabayar/del/{id}', 'Master\CarabayarController@destroy');

//TABLE TRANSAKSI
Route::get('/booking', 'Transaksi\BookingController@index');
Route::post('/booking/del/{id}', 'Transaksi\BookingController@destroy')->name('booking.del');

Route::get('/angsuran', 'Transaksi\AngsuranController@index');
Route::post('/angsuran/post/{code}', 'Transaksi\AngsuranController@store')->name('angsuran.post');

Route::get('/angsuran/detail', 'Transaksi\AngsuranDetailController@index')->name('angsuran_detail.get');
Route::post('/angsuran/detail/post', 'Transaksi\AngsuranDetailController@store')->name('angsuran_detail.post');

Route::get('/paymentype', function () {

	return view('paymentype');
});

Route::get('/sample', 'TransaksiController@index');

Route::get('/inputcarabayar', function () {

	return view('inputcarabayar');
});

Route::get('/closeunit', 'T001Controller@closeUnit');

Route::resource('transaksi', 'transaksicontroller');
