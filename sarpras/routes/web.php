<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PengajuanController;
use App\Http\Controllers\databarangController;

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

 //login

Route::get('/masuk',[LoginController::class,'login'])->name('masuk');
Route::post('/loginproses', [LoginController::class, 'loginproses'])->name('loginproses');
Route::get('/register', [LoginController::class, 'register'])->name('register');
Route::post('/simpanregister', [LoginController::class, 'simpanregister' ])->name('simpanregister');
Route::get('/logout', [LoginController::class,'logout'])->name('logout');

//Admin

Route::group(['middleware' => ['auth','level:admin']], function() {
Route::get('/index',[IndexController::class,'index'])->name('index');

});

Route::group(['middleware' => ['auth','level:superadmin']], function() {
});

Route::group(['middleware' => ['auth','level:admin']], function() {

    Route::get('/indexadmin',[IndexController::class,'indexadmin'])->name('indexadmin');
    Route::get('/pengajuan',[PengajuanController::class,'pengajuan'])->name('pengajuan');
});

Route::group(['middleware' => ['auth','level:admin,guru']], function() {

    Route::get('/indexguru',[IndexController::class,'indexguru'])->name('indexguru');

});

Route::group(['middleware' => ['auth','level:siswa']], function() {

    Route::get('/indexsiswa',[IndexController::class,'indexsiswa'])->name('indexsiswa');

});

// table data barang

Route::get('/databarang', [databarangController::class, 'index'])->name('databarang')->middleware('auth');
Route::get('/tambahdatabarang', [databarangController::class, 'tambahdatabarang'])->name('tambahdatabarang');
Route::post('/insertdatabarang', [databarangController::class, 'insertdatabarang'])->name('insertdatabarang');
Route::get('/tampilkandatabarang/{p}', [databarangController::class, 'tampilkandatabarang'])->name('tampilkandatabarang');
Route::post('/updatedatabarang/{p}', [databarangController::class, 'updatedatabarang'])->name('updatedatabarang');
Route::get('/deletedatabarang/{p}', [databarangController::class, 'delete'])->name('deletedatabarang');


