<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\guruController;
use App\Http\Controllers\merkController;
use App\Http\Controllers\userController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\nabarController;
use App\Http\Controllers\SatuanController;
use App\Http\Controllers\kategoriController;
use App\Http\Controllers\PengajuanController;
use App\Http\Controllers\databarangController;
use App\Http\Controllers\BaranghabisController;
use App\Http\Controllers\barangmasukController;

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

Route::get('/select',[LoginController::class,'select'])->name('select');

Route::get('/register', [LoginController::class, 'register'])->name('register');
Route::get('/registersiswa', [LoginController::class, 'registersiswa'])->name('registersiswa');

Route::post('/simpanregister', [LoginController::class, 'simpanregister' ])->name('simpanregister');
Route::post('/simpansiswa', [LoginController::class, 'simpansiswa' ])->name('simpansiswa');

Route::get('/logout', [LoginController::class,'logout'])->name('logout');

//Admin

Route::group(['middleware' => ['auth','level:admin']], function() {

    Route::get('/indexadmin',[IndexController::class,'indexadmin'])->name('indexadmin');
    Route::get('/pengajuan',[PengajuanController::class,'pengajuan'])->name('pengajuan');
});

Route::group(['middleware' => ['auth','level:guru']], function() {

    Route::get('/indexguru',[IndexController::class,'indexguru'])->name('indexguru');

});

Route::group(['middleware' => ['auth','level:siswa']], function() {

    Route::get('/indexsiswa',[IndexController::class,'indexsiswa'])->name('indexsiswa');

});

// table data barang(admin)

Route::get('/databarang', [databarangController::class, 'index'])->name('databarang')->middleware('auth');
Route::get('/tambahdatabarang', [databarangController::class, 'tambahdatabarang'])->name('tambahdatabarang');
Route::post('/insertdatabarang', [databarangController::class, 'insertdatabarang'])->name('insertdatabarang');
Route::get('/tampilkandatabarang/{p}', [databarangController::class, 'tampilkandatabarang'])->name('tampilkandatabarang');
Route::post('/updatedatabarang/{p}', [databarangController::class, 'updatedatabarang'])->name('updatedatabarang');
Route::get('/deletedatabarang/{p}', [databarangController::class, 'delete'])->name('deletedatabarang');


// baranghabis

Route::get('/baranghabis', [BaranghabisController::class, 'index'])->name('baranghabis')->middleware('auth');
Route::get('/tambahbaranghabis', [BaranghabisController::class, 'tambahbaranghabis'])->name('tambahbaranghabis');
Route::post('/insertbaranghabis', [BaranghabisController::class, 'insertbaranghabis'])->name('insertbaranghabis');
Route::get('/tampilkanbaranghabis/{p}', [BaranghabisController::class, 'tampilkanbaranghabis'])->name('tampilkanbaranghabis');
Route::post('/updatebaranghabis/{p}', [BaranghabisController::class, 'updatebaranghabis'])->name('updatebaranghabis');
Route::get('/deletebaranghabis/{p}', [BaranghabisController::class, 'delete'])->name('deletebaranghabis');


// table barang masuk(admin)

Route::get('/barangmasuk', [barangmasukController::class, 'index'])->name('barangmasuk')->middleware('auth');
Route::get('/tambahbarangmasuk', [barangmasukController::class, 'tambahbarangmasuk'])->name('tambahbarangmasuk');
Route::post('/insertbarangmasuk', [barangmasukController::class, 'insertbarangmasuk'])->name('insertbarangmasuk');
Route::get('/tampilkanbarangmasuk/{p}', [barangmasukController::class, 'tampilkanbarangmasuk'])->name('tampilkanbarangmasuk');
Route::post('/updatebarangmasuk/{p}', [barangmasukController::class, 'updatebarangmasuk'])->name('updatebarangmasuk');
Route::get('/deletebarangmasuk/{p}', [barangmasukController::class, 'delete'])->name('deletebarangmasuk');

//Kategori
Route::get('/kategorii', [kategoriController::class, 'kategorii'])->name('kategorii');
Route::get('/kategori_tambah', [kategoriController::class, 'kategori_tambah'])->name('kategori_tambah');
Route::get('/kategori_edit/{id}', [kategoriController::class, 'kategori_edit'])->name('kategori_edit');
Route::post('/insertkategori', [kategoriController::class, 'insertkategori'])->name('insertkategori');
Route::post('/updatekategori/{id}', [kategoriController::class, 'updatekategori'])->name('updatekategori');
Route::get('/deletekategori/{id}', [kategoriController::class, 'deletekategori'])->name('deletekategori');


//nabar
Route::get('/nabarr', [nabarController::class, 'nabarr'])->name('nabarr');
Route::get('/nabar_tambah', [nabarController::class, 'nabar_tambah'])->name('nabar_tambah');
Route::get('/nabar_edit/{id}', [nabarController::class, 'nabar_edit'])->name('nabar_edit');
Route::post('/insertnabar', [nabarController::class, 'insertnabar'])->name('insertnabar');
Route::post('/updatenabar/{id}', [nabarController::class, 'updatenabar'])->name('updatenabar');
Route::get('/deletenabar/{id}', [nabarController::class, 'deletenabar'])->name('deletenabar');


//merk
Route::get('/merkk', [merkController::class, 'merkk'])->name('merkk');
Route::get('/merk_tambah', [merkController::class, 'merk_tambah'])->name('merk_tambah');
Route::get('/merk_edit/{id}', [merkController::class, 'merk_edit'])->name('merk_edit');
Route::post('/insertmerk', [merkController::class, 'insertmerk'])->name('insertmerk');
Route::post('/updatemerk/{id}', [merkController::class, 'updatemerk'])->name('updatemerk');
Route::get('/deletemerk/{id}', [merkController::class, 'deletemerk'])->name('deletemerk');

//Satuan
Route::get('/satuan', [SatuanController::class, 'satuan'])->name('satuan');
Route::get('/tambahsatuan', [SatuanController::class, 'tambahsatuan'])->name('tambahsatuan');
Route::get('/satuan_edit/{id}', [SatuanController::class, 'satuan_edit'])->name('satuan_edit');
Route::post('/insertsatuan', [SatuanController::class, 'insertsatuan'])->name('insertsatuan');
Route::post('/updatesatuan/{id}', [SatuanController::class, 'updatesatuan'])->name('updatesatuan');
Route::get('/deletesatuan/{id}', [SatuanController::class, 'deletesatuan'])->name('deletesatuan');

//user
Route::get('/user', [userController::class, 'user'])->name('user');
Route::get('/deleteuser/{p}', [userController::class, 'deleteuser'])->name('deleteuser');

//guru tapilan stok
Route::get('/data1', [guruController::class, 'data1'])->name('data1');
Route::get('/data2', [guruController::class, 'data2'])->name('data2');



