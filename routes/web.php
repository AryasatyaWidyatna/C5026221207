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
