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
Route::get('halo', function () {
	return "Halo, Selamat datang di tutorial laravel www.malasngoding.com";
});

// route blog
Route::get('/blog', 'BlogController@home');
Route::get('/blog/tentang', 'BlogController@tentang');
Route::get('/blog/kontak', 'BlogController@kontak');

Route::get('dosen', 'DosenController@index');

//route CRUD dengan query builder
Route::get('/pegawai','PegawaiController@index');

Route::get('/pegawai/tambah','PegawaiController@tambah');
Route::post('/pegawai/store','PegawaiController@store');

Route::get('/pegawai/edit/{id}','PegawaiController@edit');
Route::post('/pegawai/update','PegawaiController@update');

Route::get('/pegawai/hapus/{id}','PegawaiController@hapus');
//end route CRUD dengan query builder

Route::get('/pegawai/cari','PegawaiController@cari');

//request dari url
Route::get('/pegawai/{nama}', 'PegawaiController@index');

Route::get('/formulir', 'PegawaiController@formulir');
Route::post('/formulir/proses', 'PegawaiController@proses');


Route::get('/input', 'FormValidationController@input');
Route::post('/proses', 'FormValidationController@proses');

Route::get('/pegawais', 'PegawaisController@index');

//crud dengan eloquent
Route::get('/eloquent-pegawai', 'EloquentPegawaiController@index');
Route::get('/eloquent-pegawai/tambah', 'EloquentPegawaiController@tambah');
Route::post('/eloquent-pegawai/store', 'EloquentPegawaiController@store');
Route::get('/eloquent-pegawai/edit/{id}', 'EloquentPegawaiController@edit');
Route::put('/eloquent-pegawai/update/{id}', 'EloquentPegawaiController@update');
Route::get('/eloquent-pegawai/hapus/{id}', 'EloquentPegawaiController@hapus');
//end crud dengan eloquent

Route::get('/guru', 'GuruController@index');
//cara membuat soft delete
Route::get('/guru/hapus/{id}', 'GuruController@hapus');
//menampilkan data soft delete
Route::get('/guru/trash', 'GuruController@trash');
//restore by id soft delete
Route::get('/guru/restore/{id}', 'GuruController@restore');
//restore all soft delete
Route::get('/guru/restore-all', 'GuruController@restore_all');
//delete by id soft delete
Route::get('/guru/delete/{id}', 'GuruController@delete');
//delete all soft delete
Route::get('/guru/delete-all', 'GuruController@delete_all');