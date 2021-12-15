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

Route::get('/', function () {
    return view('welcome');
});

Route::get('tugas4', function () {
    return view('tugas4');
});
Route::get('praktikum2', function () {
    return view('praktikum2');
});

Route::get('ets',"ViewController@showETS");
Route::get('dictionary',"ViewController@showDictionary");
Route::post('answerDictionary',"ViewController@answer");

//route CRUD
Route::get('/pegawai','pegawaiController@index');
Route::get('/pegawai/tambah','pegawaiController@tambah');
Route::post('/pegawai/store','pegawaiController@store');
Route::get('/pegawai/edit/{id}','pegawaiController@edit');
Route::post('/pegawai/update','pegawaiController@update');
Route::get('/pegawai/hapus/{id}','pegawaiController@hapus');
Route::get('/pegawai/cari','pegawaiController@cari');
Route::get('/pegawai/detail/{id}','pegawaiController@view');


//route CRUD ABSEN
Route::get('/pendapatan','PendapatanController@index');
Route::get('/pendapatan/tambah','PendapatanController@tambah');
Route::post('/pendapatan/store','PendapatanController@store');
Route::get('/pendapatan/edit/{id}','PendapatanController@edit');
Route::post('/pendapatan/update','PendapatanController@update');
Route::get('/pendapatan/hapus/{id}','PendapatanController@hapus');
Route::get('/pendapatan/cari','pendapatanController@cari');
Route::get('/pendapatan/detail/{id}','pendapatanController@view');


Route::get('/absen','AbsenController@index');
Route::get('/absen/tambah','AbsenController@tambah');
Route::post('/absen/store','AbsenController@store');
Route::get('/absen/edit/{id}','AbsenController@edit');
Route::post('/absen/update','AbsenController@update');
Route::get('/absen/hapus/{id}','AbsenController@hapus');
Route::get('/absen/detail/{id}','absenController@view');
Route::get('/absen/cari','absenController@cari');

Route::get('/buku','bukuController@index');
Route::get('/buku/tambah','bukuController@tambah');
Route::post('/buku/store','bukuController@store');
Route::get('/buku/edit/{kodebuku}','bukuController@edit');
Route::post('/buku/update','bukuController@update');
Route::get('/buku/hapus/{kodebuku}','bukuController@hapus');
Route::get('/buku/cari','bukuController@cari');
Route::get('/buku/detail/{kodebuku}','bukuController@view');

Route::get('/keranjangbelanja','KeranjangBelanjaController@index');
Route::get('/keranjangbelanja/tambah','KeranjangBelanjaController@tambah');
Route::post('/keranjangbelanja/store','KeranjangBelanjaController@store');
Route::get('/keranjangbelanja/hapus/{id}','KeranjangBelanjaController@hapus');
Route::get('/keranjangbelanja/cari','KeranjangBelanjaController@cari');
