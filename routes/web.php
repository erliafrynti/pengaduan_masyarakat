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
    return view('/welcome');
});


//login & register
Route::get('/login', 'LoginController@login')->name('login');
Route::post('/login', 'LoginController@postlogin');
Route::get('/register', 'LoginController@register');
Route::get('/logout', 'LoginController@logout');
Route::post('/simpanregister', 'LoginController@simpanregister')->name('simpanregister');
Route::post('/getkabupaten', 'LoginController@getkabupaten')->name('getkabupaten');
Route::post('/getkecmatan', 'LoginController@getkecamatan')->name('getkecamatan');
Route::post('/getdesa', 'LoginController@getdesa')->name('getdesa');


Route::group(['middleware' => 'auth'], function () {
    Route::group(['middleware' => 'checkLevel:user'], function () {

        //pengaduan
        Route::get('/pengaduan', 'PengaduanController@index');
        Route::get('/pengaduan/create', 'PengaduanController@create');
        Route::post('/pengaduan/store', 'PengaduanController@store');
        Route::get('/pengaduan/show{id_pengaduan}', 'PengaduanController@show');
        // laporan
        Route::get('/laporan', 'PengaduanController@laporan');
    });


    Route::group(['middleware' => 'checkLevel:petugas'], function () {
        Route::get('/petugas', 'PengaduanController@index');
        /*  //tanggapan 
         Route::get('/tanggapan', 'TanggapanController@index');
         Route::get('/tanggapan/create', 'TanggapanController@create');
         Route::post('/tanggapan/store', 'TanggapanController@store');
         Route::get('/tanggapan/edit/{id_tanggapan}', 'TanggapanController@edit');
         Route::get('/tanggapan/delete/{id_tanggapan}', 'TanggapanController@delete');
         // pengaduan
         Route::get('/pengaduan/show/{id_pengaduan}', 'PengaduanController@show');
         Route::get('/pengaduan/edit/{id_pengaduan}', 'PengaduanController@edit');
         Route::put('/pengaduan/update/{id_pengaduan}', 'PengaduanController@update');
         Route::get('/pengaduan/delete/{id_pengaduan}', 'PengaduanController@delete');
         Route::get('/pengaduan', 'PengaduanController@index');
         // pengaduantanggapan
         Route::get('/pengaduantanggapan/{id}', 'PengaduanController@pengaduantanggapan'); */
    });

    Route::group(['middleware' => 'checkLevel:admin,petugas'], function () {
        //tanggapan 
        Route::get('/tanggapan', 'TanggapanController@index');
        Route::get('/tanggapan/create', 'TanggapanController@create');
        Route::post('/tanggapan/store', 'TanggapanController@store');
        Route::get('/tanggapan/edit/{id_tanggapan}', 'TanggapanController@edit');
        Route::get('/tanggapan/delete/{id_tanggapan}', 'TanggapanController@delete');
        // pengaduan
        Route::get('/pengaduan/show/{id_pengaduan}', 'PengaduanController@show');
        Route::get('/pengaduan/edit/{id_pengaduan}', 'PengaduanController@edit');
        Route::put('/pengaduan/update/{id_pengaduan}', 'PengaduanController@update');
        Route::get('/pengaduan/delete/{id_pengaduan}', 'PengaduanController@delete');
        Route::get('/pengaduan', 'PengaduanController@index');
        // pengaduantanggapan
        Route::get('/pengaduantanggapan/{id}', 'PengaduanController@pengaduantanggapan');
    });

    Route::group(['middleware' => 'checkLevel:admin'], function () {
        Route::get('/admin', 'PengaduanController@index');

        /* // tanggapan
        Route::get('/tanggapan', 'TanggapanController@index');
        Route::get('/tanggapan/create', 'TanggapanController@create');
        Route::post('/tanggapan/store', 'TanggapanController@store');
        Route::get('/tanggapan/edit/{id_tanggapan}', 'TanggapanController@edit');
        Route::get('/tanggapan/delete/{id_tanggapan}', 'TanggapanController@delete');
        Route::get('/tanggapan/show/{id_tanggapan}', 'TanggapanController@show');
        // pengaduan
        Route::get('/pengaduan/show/{id_pengaduan}', 'PengaduanController@show');
        Route::get('/pengaduan/edit/{id_pengaduan}', 'PengaduanController@edit');
        Route::put('/pengaduan/update/{id_pengaduan}', 'PengaduanController@update');
        Route::get('/pengaduan/delete/{id_pengaduan}', 'PengaduanController@delete');
        // Route::get('/laporan','PengaduanController@laporan');
        Route::get('/pengaduan', 'PengaduanController@index');
        // Route::get('/pengaduan/show/{id_pengaduan}', 'PengaduanController@show');
        // pengaduantanggapan
        Route::get('/pengaduantanggapan/{id}', 'PengaduanController@pengaduantanggapan'); */
        Route::get('/cetak', 'PengaduanController@cetak');
    });

    Route::get('/profile/{id}', 'ProfileController@show');
});
