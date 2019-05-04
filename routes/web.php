<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where Syou can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'PagesController@home');

//Pembelian route
//route pemesanan pembelian 
Route::get('/pemesananPembelian', 'PagesController@pemesananPembelian');
Route::get('/konfirmasipemesananPembelian', 'PagesController@konfirmasiPembelian');
Route::get('/diterimapemesananPembelian', 'PagesController@diterimaPembelian');
Route::get('/batalpemesananPembelian', 'PagesController@batalPembelian');

Route::get('/penerimaanBarang', 'PagesController@penerimaanBarang');
Route::get('/konfirmasipenerimaanBarang', 'PagesController@konfirmasipenerimaanBarang');
Route::get('/returnPenerimaanBarang', 'PagesController@returnPenerimaanBarang');
Route::get('/konfirmasireturnPenerimaanBarang', 'PagesController@konfirmasiReturnPenerimaanBarang');

//route Penjualan  
//route pemesanan penjualan 
Route::get('/pemesananPenjualan', 'PagesController@pemesananPenjualan');
Route::get('/konfirmasipemesananPenjualan', 'PagesController@konfirmasiPenjualan');
Route::get('/dikirimpemesananPenjualan', 'PagesController@dikirimPenjualan');
Route::get('/batalpemesananPenjualan', 'PagesController@batalPenjualan');

//route surat jalan
Route::get('/suratJalan', 'PagesController@suratJalan');
Route::get('/konfirmasisuratJalan', 'PagesController@konfirmasiSuratJalan');

//route return surat jalan
Route::get('/returnSuratJalan', 'PagesController@returnSuratJalan');
Route::get('/konfirmasireturnSuratJalan', 'PagesController@konfirmasiReturnSuratJalan');

//route penjualan langsung
Route::get('/penjualanLangsung', 'PagesController@penjualanLangsung');
//route return penjualan langsung
Route::get('/returnPenjualanLangsung', 'PagesController@returnPenjualanLangsung');

//route master
Route::get('/datagudang', 'PagesController@datagudang');
Route::get('/dataitem', 'PagesController@dataitem');
Route::get('/dataklasifikasi', 'PagesController@dataklasifikasi');
Route::get('/datamatauang', 'PagesController@datamatauang');
Route::get('/datapelanggan', 'PagesController@datapelanggan');
Route::get('/datasatuan', 'PagesController@datasatuan');
Route::get('/datasupplier', 'PagesController@datasupplier');

//Route me(samsul)
Route::resource('/karyawan', 'KaryawanController');
Route::get('/{any}', 'KaryawanController@index')->where('any', '.*');
