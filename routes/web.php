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

Route::get('/', function () {return view('user'); });
Route::get('/login', function () {return view('login'); });
Route::get('/admin', function () {return view('/admin/beranda'); });
Route::get('/admin/anggota', function () {return view('/admin/anggota'); });
Route::get('/admin/anggota/baru', function () {return view('/admin/anggotaBaru'); });
Route::get('/admin/jadwal', function () {return view('/admin/jadwal'); });
Route::get('/admin/proker', function () {return view('/admin/proker'); });
Route::get('/admin/laporan', function () {return view('/admin/laporan'); });
