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

//USER

Route::get('/', 'Main\MainController@index');
Route::post('/post-register', 'Auth\AuthController@register');
Route::get('/product/{id}', 'Main\MainController@detail');
Route::get('/cart/{id}', 'Main\TransactionController@cartPage');
Route::post('/ajax/addToCart', 'Main\TransactionController@addToCart');
Route::get('/payment/{id}', 'Main\TransactionController@pagePayment');
Route::post('/payment/send', 'Main\TransactionController@send');


Route::get('/kontak', function () {
    return view('kontak');
});


Route::get('/user', 'Main\MainController@dashboard');

Route::get('/user/transaksi', 'Main\MainController@history');

Route::get('/user/detailtransaksi/{id}', 'Main\MainController@detailHistory');

Route::get('/user/profil', 'Main\MainController@profile');
Route::post('/user/profil/update', 'Main\MainController@updateProfile');


Route::get('/login', function () {
    return view('login.login');
});
Route::post('/post-login', 'Auth\AuthController@login');

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

Route::get('/mitra/iklan', 'Mitra\IklanController@index');
Route::get('/mitra/iklan/tambahiklan', function () {
    return view('mitra.iklan.tambahiklan');
});
Route::post('/mitra/iklan/tambahiklan', 'Mitra\IklanController@addForm');
Route::get('/mitra/iklan/editiklan/{id}', 'Mitra\IklanController@editForm');
Route::post('/mitra/iklan/editiklan/{id}', 'Mitra\IklanController@editForm');
Route::get('/mitra/transaksi', 'Mitra\TransaksiController@index');

Route::get('/mitra/profil', 'Mitra\ProfileController@index');
Route::post('/mitra/profil', 'Mitra\ProfileController@index');

//ADMIN

Route::get('/admin', function () {
    return view('admin.dashboard');
});

Route::get('/admin/iklan', 'Admin\IklanController@index');

Route::get('/admin/transaksi', 'Admin\TransaksiController@index');

Route::get('/admin/transaksi/detailtransaksi/{id}', 'Admin\TransaksiController@detail');
Route::post('/admin/transaksi/detailtransaksi/{id}', 'Admin\TransaksiController@detail');

Route::get('/admin/mitra', 'Admin\MitraController@index');

Route::get('/admin/transaksi/cetak', 'LaporanController@cetakAdminDataTransaksi')->name('cetakAdminDataTransaksi');
Route::get('/admin/mitra/cetak', 'LaporanController@cetakAdminDataMitra')->name('cetakAdminDataMitra');

Route::get('/logout', 'Auth\AuthController@logout');
