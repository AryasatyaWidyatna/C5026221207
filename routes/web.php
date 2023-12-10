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

Route::get('halo',function(){
    return "Halo Apa kabar";
});
Route::get('tugas1',function (){
    return view('tugas1');
})->name('tugas1');
Route::get('tugas2',function (){
    return view('tugas2');
})->name('tugas2');
Route::get('catetan1',function (){
    return view('catetan1');
})->name('catetan1');
Route::get('catetan2',function (){
    return view('catetan2');
})->name('catetan2');
Route::get('catetan3',function (){
    return view('catetan3');
})->name('catetan3');
Route::get('/blog', function () {
    return view('home');
});
Route::get('/blog/tentang', function () {
    return view('tentang');
});
Route::get('/blog/kontak', function () {
    return view('kontak');
});

Route::get('perkalian', 'App\Http\Controllers\DosenController@index');
Route::get('biodata', 'App\Http\Controllers\DosenController@biodata');

//route CRUD
Route::get('/pegawai','App\Http\Controllers\PegawaiController@index');
Route::get('/pegawai/tambah','App\Http\Controllers\PegawaiController@tambah');
Route::post('/pegawai/store','App\Http\Controllers\PegawaiController@store');
Route::get('/pegawai/edit/{id}','App\Http\Controllers\PegawaiController@edit');
Route::post('/pegawai/update','App\Http\Controllers\PegawaiController@update');
Route::get('/pegawai/hapus/{id}','App\Http\Controllers\PegawaiController@hapus');


Route::get('/pegawai/cari','App\Http\Controllers\PegawaiController@cari');

Route::get('/pegawai/view/{id}','App\Http\Controllers\PegawaiController@view');

Route::get('/nilaikuliah','App\Http\Controllers\NilaiKuliahController@index');
Route::get('/nilaikuliah/tambahnilai','App\Http\Controllers\NilaiKuliahController@tambahnilai');
Route::post('/nilaikuliah/storenilai','App\Http\Controllers\NilaiKuliahController@storenilai');

//route CRUD
Route::get('/keranjangbelanja','App\Http\Controllers\KeranjangController@index');
Route::get('/keranjangbelanja/beli','App\Http\Controllers\KeranjangController@beli');
Route::post('/keranjangbelanja/store','App\Http\Controllers\KeranjangController@store');
Route::get('/keranjangbelanja/hapus/{id}','App\Http\Controllers\KeranjangController@hapus');

//route CRUD Topi
Route::get('/topi','App\Http\Controllers\TopiController@index');
Route::get('/topi/tambahtopi','App\Http\Controllers\TopiController@tambah');
Route::post('/topi/store','App\Http\Controllers\TopiController@store');
Route::get('/topi/edit/{id}','App\Http\Controllers\TopiController@edit');
Route::post('/topi/update','App\Http\Controllers\TopiController@update');
Route::get('/topi/hapus/{id}','App\Http\Controllers\TopiController@hapus');
Route::get('/topi/cari','App\Http\Controllers\TopiController@cari');
Route::get('/topi/view/{id}','App\Http\Controllers\TopiController@view');
