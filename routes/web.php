<?php

use App\Http\Controllers\PengaduanController;
use Illuminate\Support\Facades\Route;

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
    return view('landingpage');
});

//form pengaduan
Route::get('/pengaduan','PengaduanController@index');
Route::get('/pengaduan/create', 'PengaduanController@create');
Route::post('/pengaduan/store', 'PengaduanController@store');
Route::get('/pengaduan/show/{id_pengaduan}', 'PengaduanController@show');
Route::get('/pengaduan/edit/{id_pengaduan}', 'PengaduanController@edit');
Route::put('/pengaduan/update/{id_pengaduan}', 'PengaduanController@update');
Route::get('/pengaduan/delete/{id_pengaduan}', 'PengaduanController@delete');

//Form Tanggapan
Route::get('/tanggapan','TanggapanController@index');
Route::get('/tanggapan/create', 'TanggapanController@create');
Route::post('/tanggapan/store', 'TanggapanController@store');
Route::get('/tanggapan/edit/{id_tanggapan}', 'TanggapanController@edit');
Route::get('/tanggapan/delete/{id_tanggapan}', 'TanggapanController@delete');

Route::get('/petugas','PetugasController@index');

