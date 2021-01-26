<?php

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
    return view('welcome');
});



/**
 * Router For User Interface Heena Unchhhh
 */

 Route::get('/login','UiController@Login');
 Route::get('/beranda','UiController@Beranda');
 Route::get('/rekening','UiController@Rekening');
 Route::get('/kas/masuk','UiController@KasMasuk');
 Route::get('/kas/keluar','UiController@KasKeluar');
 Route::get('/rekap','UiController@RekapKas');
 Route::get('/rekap/kas_masuk','UiController@RekapKasMasuk');
 Route::get('/rekap/kas_keluar','UiController@RekapKasKeluar');
 Route::get('/rekap/semua','UiController@RekapSemuaKas');
 Route::get('/rekap/semua','UiController@RekapSemuaKas');
 Route::get('/rekap/rekening','UiController@RekapRekeing');
 Route::get('/user','UiController@User');
 Route::get('/user/profile','UiController@Profile');
 