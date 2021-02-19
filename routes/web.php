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
Route::get('/login', 'Auth\LoginController@showLoginForm')->name('login');

Auth::routes();

Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function() {
    Route::get('/', 'BerandaController@index')->name('admin');
    Route::get('/anggota', 'AnggotaController@index');
    Route::get('/anggota/baru', 'AnggotaBaruController@index');
    Route::get('/jadwal', function () {return view('/admin/jadwal'); });
    Route::get('/proker', function () {return view('/admin/proker'); });
    Route::get('/laporan', function () {return view('/admin/laporan'); });
});

Route::get('/home', 'HomeController@index')->name('home');
