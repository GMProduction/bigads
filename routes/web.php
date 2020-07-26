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
    return view('depan.welcome');
});

Route::get('/login', function () {
    return view('login.login');
});

Route::get('/daftarmitra', function () {
    return view('login.daftarmitra');
});

Route::get('/daftaruser', function () {
    return view('login.daftaruser');
});

//MITRA

Route::get('/mitra', function () {
    return view('mitra.dashboard');
});

Route::get('/mitra/iklan', function () {
    return view('mitra.iklan.iklan');
});

Route::get('/mitra/tambahiklan', function () {
    return view('mitra.iklan.tambahiklan');
});

Route::get('/mitra/transaksi', function () {
    return view('mitra.transaksi.transaksi');
});

Route::get('/mitra/profil', function () {
    return view('mitra.profil.profil');
});

//ADMIN

Route::get('/admin', function () {
    return view('admin.dashboard');
});

Route::get('/admin/iklan', function () {
    return view('admin.iklan.iklan');
});

Route::get('/admin/transaksi', function () {
    return view('admin.transaksi.transaksi');
});

Route::get('/admin/mitra', function () {
    return view('admin.mitra.mitra');
});

Route::get('/admin/transaksi/cetak', 'LaporanController@cetakAdminDataTransaksi')->name('cetakAdminDataTransaksi');
Route::get('/admin/mitra/cetak', 'LaporanController@cetakAdminDataMitra')->name('cetakAdminDataMitra');
