<?php
use App\Http\Controllers\DataKlasifikasiController;

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

//ROUTE MASTER
// route menu
Route::get('/datagudang', 'DataGudangController@index');
Route::get('/dataitem', 'DataItemController@index');
Route::get('/dataklasifikasi', 'DataKlasifikasiController@index');
Route::get('/datamatauang', 'DataMataUangController@index');
Route::get('/datapelanggan', 'DataPelangganController@index');
Route::get('/datasatuan', 'DataSatuanController@index');
Route::get('/datasupplier', 'DataSupplierController@index');

//route datagudang
Route::get('/datagudang/store', 'DataGudangController@store');
Route::get('/datagudang/create', 'DataGudangController@create');
Route::get('/datagudang/edit/{id}', 'DataGudangController@edit');
Route::get('/datagudang/show', 'DataGudangController@show');
Route::post('/datagudang/update/{id}', 'DataGudangController@update');
Route::get('/datagudang/destroy/{id}', 'DataGudangController@destroy');

//route dataklasifikasi
Route::get('/dataklasifikasi/store', 'DataKlasifikasiController@store');
Route::get('/dataklasifikasi/create', 'DataKlasifikasiController@create');
Route::get('/dataklasifikasi/edit/{id}', 'DataKlasifikasiController@edit');
Route::get('/dataklasifikasi/show', 'DataKlasifikasiController@show');
Route::post('/dataklasifikasi/update/{id}', 'DataKlasifikasiController@update');
Route::get('/dataklasifikasi/destroy/{id}', 'DataKlasifikasiController@destroy');

//route datamatauang
Route::get('/datamatauang/store', 'DataMataUangController@store');
Route::get('/datamatauang/create', 'DataMataUangController@create');
Route::get('/datamatauang/edit/{id}', 'DataMataUangController@edit');
Route::get('/datamatauang/show', 'DataMataUangController@show');
Route::post('/datamatauang/update/{id}', 'DataMataUangController@update');
Route::get('/datamatauang/destroy/{id}', 'DataMataUangController@destroy');

// route buat semua controller
// Route::resource('lokasi', 'DataGudangController');
// Route::resource('item', 'DataItemController');
// Route::get('/kategori','DataKlasifikasiController@index');
// Route::resource('kategori', 'DataKlasifikasiController');
// Route::resource('matauang', 'DataMataUangController');
// Route::resource('pelanggan', 'DataPelangganController');
// Route::resource('satuan', 'DataSatuanController');
// Route::resource('supplier', 'DataSupplierController');
// Route::resource('PemesananPembelian', 'PemesananPembelianController');
// Route::resource('PemesananPenjualan', 'PemesananPenjualanController');