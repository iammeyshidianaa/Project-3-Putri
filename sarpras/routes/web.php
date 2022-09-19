<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\LoginController;

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

Route::get('/masuk',[LoginController::class,'login'])->name('masuk');
Route::post('/loginproses', [LoginController::class, 'loginproses'])->name('loginproses');
Route::get('/register', [LoginController::class, 'register'])->name('register');
Route::post('/simpanregister', [LoginController::class, 'simpanregister' ])->name('simpanregister');
Route::get('/logout', [LoginController::class, 'logout' ])->name('logout');

Route::group(['middleware' => ['auth','ceklevel:admin']], function() {

    Route::get('/index',[IndexController::class,'index'])->name('index');
    Route::get('/indexadmin',[IndexController::class,'indexadmin'])->name('indexadmin');
    Route::get('/indexguru',[IndexController::class,'indexguru'])->name('indexguru');
    Route::get('/indexsiswa',[IndexController::class,'indexsiswa'])->name('indexsiswa');

});



