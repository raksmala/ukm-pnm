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

Route::get('/', 'UserController@index')->name('user');
Route::get('/ukm', 'UKMController@index')->name('ukm');
Route::get('/daftar', 'DaftarController@index')->name('daftar');
Route::get('/kritikSaran', 'KritikSaranController@index')->name('kritikSaran');
Route::get('/login', 'Auth\LoginController@showLoginForm')->name('login');
Route::get('/login/user', 'UserLoginController@showLoginForm')->name('userLogin');

Auth::routes();

Route::group(['prefix' => 'admin', 'middleware' => 'admin.UKM'], function() {
    Route::get('/', 'Admin\BerandaController@index')->name('admin');
    Route::get('/anggota', 'Admin\AnggotaController@index');
    Route::get('/anggota/baru', 'Admin\AnggotaBaruController@index');
    Route::get('/jadwal', 'Admin\JadwalController@index');
    Route::get('/proker', 'Admin\ProkerController@index');
    Route::get('/laporan', 'Admin\LaporanController@index');
});

Route::group(['prefix' => 'bem', 'middleware' => 'admin.BEM'], function() {
    Route::get('/', 'BEM\BerandaController@index')->name('bem');
    Route::get('/anggota', 'BEM\AnggotaController@index');
    Route::get('/jadwal', 'BEM\JadwalController@index');
    Route::get('/proker', 'BEM\ProkerController@index');
    Route::get('/laporan', 'BEM\LaporanController@index');
});

Route::get('/home', 'HomeController@index')->name('home');
