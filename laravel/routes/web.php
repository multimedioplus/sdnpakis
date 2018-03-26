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

//Publiic Route
// Route::get('/','PublicController@utama');
Route::get('/','PublicController@awal');
Route::get('/data/guru' ,'PublicController@guru');
Route::get('/data/siswa','PublicController@siswa');
Route::get('/pilih', 'PublicController@pilih');
Route::get('/login/{id}', 'Auth\LoginController@showLoginForm');

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

// Staff Route
Route::get('/dashboard','AdminController@dashboard');
Route::get('/sekolah','AdminController@sekolah');
Route::get('/siswa','AdminController@siswa');
Route::get('/guru','AdminController@guru');
Route::get('/akun','AdminController@akun');
Route::get('/galeri','AdminController@galeri');
Route::get('/buku/induk', 'AdminController@buku');

Route::get('/admin/data/guru', 'AdminController@dataGuru');
Route::get('/admin/data/siswa', 'AdminController@dataSiswa');
Route::get('/admin/{id}/galeri', 'AdminController@galeri');

Route::post('admin/{id}/galeri', 'AdminController@updateGaleri');

Route::get('/admin/hapus/{id}/galeri', 'AdminController@deleteGaleri');
Route::get('/hapus/pengumuman/{id}', 'AdminController@hapusPengumuman');

// Admin Input Method
Route::post('input/pengumuman', 'AdminController@pengumuman');
Route::post('input/guru', 'AdminController@inputGuru');
Route::post('input/siswa', 'AdminController@inputSiswa');
Route::post('input/galeri', 'AdminController@inputGaleri');
Route::post('input/sekolah/data', 'AdminController@dataSekolah');

//Guru Route
Route::get('/guru/dashboard', 'GuruController@index');
Route::get('/guru/{id}/prota', 'GuruController@prota');
Route::get('/guru/{id}/promes', 'GuruController@promes');
Route::get('/guru/{id}/silabus', 'GuruController@silabus');
Route::get('/guru/{id}/rpp', 'GuruController@rpp');
Route::get('/guru/{id}/kd', 'GuruController@kd');
Route::get('/guru/{id}/hb', 'GuruController@hb');
Route::get('guru/{id}/nilai/uh', 'GuruController@nilaiUH');
Route::get('guru/{id}/analisis/bd', 'GuruController@analisisbd');
Route::get('guru/{id}/analisis/uh', 'GuruController@analisisuh');
Route::get('guru/{id}/analisis/uh2', 'GuruController@analisisuh2');

Route::get('/guru/tantangan/membaca', 'GuruController@tantangan');
Route::post('guru/tantangan/baca', 'GuruController@baca');

Route::post('/guru/{id}/prota', 'GuruController@updateProta');
Route::post('/guru/{id}/kd', 'GuruController@updateKd');
Route::post('/guru/{id}/promes', 'GuruController@updatePromes');
Route::post('/guru/{id}/silabus', 'GuruController@updateSilabus');
Route::post('/guru/{id}/rpp', 'GuruController@updateRpp');
Route::post('/guru/{id}/nilai/uh', 'GuruController@updateNilaiUH');
Route::post('/guru/{id}/analisis/bd', 'GuruController@updatebd');
Route::post('/guru/{id}/analisis/uh', 'GuruController@updateuh');
Route::post('/guru/{id}/analisis/uh2', 'GuruController@updateuh2');

Route::get('/guru/delete/{id}/silabus', 'GuruController@deleteSilabus');
Route::get('/guru/delete/{id}/rpp', 'GuruController@deleteRpp');

Route::post('/guru/silabus', 'GuruController@inputSilabus');
Route::post('/guru/rpp', 'GuruController@inputRpp');

//Siswa Controller 
Route::get('/siswa/dashboard', 'SiswaController@index');
Route::get('/siswa/buku/baca', 'SiswaController@baca');
Route::get('/siswa/buku/{id}/hapus', 'SiswaController@hapusBuku');

Route::post('/siswa/login', 'SiswaController@login');
Route::post('siswa/tantangan/baca', 'SiswaController@membaca');

