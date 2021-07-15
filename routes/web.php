<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Collection;
use \App\Models\SK_model;



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

// tampilan awal
Route::get('/', function () {
    // return view('welcome');
    // return view('layouts/master');
    // return view('dashboard');
    return view('login');
});


Route::get('/login', 'AuthController@login')->name('login');

// login ke aplikasi
Route::post('/postlogin', 'AuthController@postlogin');

// keluar dari aplikasi/log out
Route::get('/logout', 'AuthController@logout');


route::group(['middleware' => ['auth']], function () {

    // halaman depan aplikasi
    Route::get('/dashboard', function () {
        return view('/dashboard');
    });

    // SURAT MASUK
    // menampilkan surat masuk yang sudah di backup
    Route::get('/data_masuk', 'MasukController@index');

    // entry backup surat masuk
    Route::get('/masuk', 'MasukController@entry');

    // simpan data entry
    Route::post('/masuk/store', 'MasukController@store');

    // mencari surat masuk
    Route::post('/cari', 'MasukController@cari');

    // SURAT KELUAR
    // menampilkan surat keluar
    Route::get('/data_keluar', 'KeluarController@index');

    // menampilkan entry surat keluar
    Route::get('/keluar', 'KeluarController@keluar');

    // menyimpan data enty
    Route::post('keluar/store', 'keluarController@store');

    // Surat Keputusan
    // menampilkan data SK
    Route::get('/data_SK', 'SKController@index');

    // menambah backup SK
    Route::get('/SK', 'SKController@entry');

    // simpan data entry SK
    Route::post('sk/store', 'SKController@store');

    // hapus data SK
    Route::get('SK/{id}/hapus', 'SKController@hapus');

    // hapus data yang dipilih dengan checkbox pada SK
    route::post('bulk_delete', 'SKController@hapus_semua');





    // SPT
    // menampilkan data SPT
    Route::get('/data_SPT', 'sptController@index');

    // menambah backup SPT
    Route::get('/SPT', 'sptController@entry');

    // hapus data SPT
    Route::get('SPT/{id}/hapus', 'sptcontroller@hapus');
});
