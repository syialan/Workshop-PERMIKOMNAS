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

// Route::get('/', function () {
//     return view('welcome');
// });

use Illuminate\Support\Facades\Route;

Route::get('/', 'KaryawanController@index')->name('utama');
Route::get('/karyawan', 'KaryawanController@tampil')->name('karyawan');
Route::get('/karyawan/tambah', 'KaryawanController@create')->name('tambah');
Route::post('/karyawan/store', 'KaryawanController@store')->name('store');
Route::get('/karyawan/edit/{id}', 'KaryawanController@edit');
Route::put('/karyawan/update/{id}', 'KaryawanController@update');
Route::get('/karyawan/hapus/{id}', 'KaryawanController@hapus');