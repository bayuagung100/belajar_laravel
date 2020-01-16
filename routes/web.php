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
// Route::get('halo', function () {
// 	return "Halo, Selamat datang di tutorial laravel www.malasngoding.com";
// });

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

//relasi one to one eloquent
Route::get('/pengguna', 'PenggunaController@index');
//relasi one to many eloquent
Route::get('/article', 'WebController@index');
//relasi many to many
Route::get('/anggota', 'DikiController@index');

//auth
Auth::routes();
//auth dengan verifikasi email
Auth::routes(['verify' => true]);
Route::get('/home', 'HomeController@index')->name('home');

//enkripsi
Route::get('/enkripsi', 'DikiController@enkripsi');

//enkripsi url
Route::get('/data', 'DikiController@data');
Route::get('/data/{data_rahasia}', 'DikiController@data_proses');

//upload files
Route::get('/upload', 'UploadController@upload');
Route::post('/upload/proses', 'UploadController@proses_upload');
Route::get('/upload/hapus/{id}', 'UploadController@hapus');

//membuat sessions
Route::get('/session/tampil','TesController@tampilkanSession');
Route::get('/session/buat','TesController@buatSession');
Route::get('/session/hapus','TesController@hapusSession');

//membuat notifikasi dengan session
Route::get('/pesan','NotifController@index');
Route::get('/pesan/sukses','NotifController@sukses');
Route::get('/pesan/peringatan','NotifController@peringatan');
Route::get('/pesan/gagal','NotifController@gagal');


//menampilkan pesan error pada laravel
Route::get('/malasngoding/{nama}','MalasngodingController@index');

//kirim email
Route::get('/kirimemail','MalasngodingController@email');

//cetak pdf
Route::get('/pegawais/cetak-pdf', 'PegawaisController@cetak_pdf');

//eksport dan import excel
Route::get('/siswa', 'SiswaController@index');
Route::get('/siswa/export_excel', 'SiswaController@export_excel');
Route::post('/siswa/import_excel', 'SiswaController@import_excel');


//multi bahasa localization default
Route::get('/form', function () {
    return view('biodata-lang');
});

//multi bahasa localization pilih bahasa dengan url
Route::get('/{locale}/form', function ($locale) {
    App::setLocale($locale);
    return view('biodata-lang');
});

//action url
Route::get('halo/{nama}', 'HaloController@halo');
Route::get('halo','HaloController@panggil');
