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

 Route::post('/yuhu/buat_akun','PenggunaController@BuatUser'); // Hapus Ini Jika Sudah Live Mode
 Route::get('/login','UiController@Login');
 Route::post('/pengguna/login','PenggunaController@LoginUser');

 Route::group( ['middleware' => 'heenasession'], function(){ 

    Route::get('/beranda','UiController@Beranda');
    Route::get('/rekening','UiController@Rekening');
    Route::get('/kas/masuk','UiController@KasMasuk');
    Route::get('/kas/keluar','UiController@KasKeluar');
    Route::get('/rekap','UiController@RekapKas');
    Route::get('/user','UiController@User');
    Route::get('/user/profile','UiController@Profile');

    Route::get('/rekap/bulan','UiController@RekapBulan');
    Route::get('/rekap/pdf','UiController@RekapPDF');

    /**
     * Router Request
    */

    Route::post('/pengguna/buat_akun','PenggunaController@BuatUser'); // Hapus Ini Jika Sudah Live Mode
    Route::post('/pengguna/ubahpassword','PenggunaController@UbahPassword');
    Route::post('/pengguna/ubahprofile','PenggunaController@UbahProfile');
    Route::post('/pengguna/hapus','PenggunaController@DeleteUser');
    Route::post('/pengguna/updateAll','PenggunaController@UpdateAll');
    Route::get('/pengguna/show/{id}','PenggunaController@getDataPengguna');
    Route::get('/pengguna/logout','PenggunaController@Logout');

    Route::post('/rekening/tambah','RekeningController@TambahRekening');
    Route::post('/rekening/delete','RekeningController@DeleteRekening');
    Route::post('/rekening/update','RekeningController@UpdateRekening');
    Route::get('/rekening/show/{id}','RekeningController@getDataRekening');
    
    Route::post('/kas/tambah','KasController@TambahKas');
    Route::post('/kas/delete','KasController@DeleteKas');
    Route::post('/kas/update','KasController@UpdateKas');
    Route::get('/kas/show/{id}','KasController@getDataKas');


    Route::post('/nota/upload','NotaController@UploadNota');

  });