<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\guruController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\merkController;
use App\Http\Controllers\userController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\nabarController;
use App\Http\Controllers\RuangController;
use App\Http\Controllers\SatuanController;
use App\Http\Controllers\RiwayatController;
use App\Http\Controllers\RuanganController;
use App\Http\Controllers\kategoriController;
use App\Http\Controllers\PengajuanController;
use App\Http\Controllers\DaftarguruController;
use App\Http\Controllers\databarangController;
use App\Http\Controllers\MasukadminController;
use App\Http\Controllers\BaranghabisController;
use App\Http\Controllers\barangmasukController;
use App\Http\Controllers\DikembalikanController;
use App\Http\Controllers\PinjambarangController;
use App\Http\Controllers\BarangdipinjamController;
use App\Http\Controllers\ForgotPasswordController;
use App\Http\Controllers\PeminjamanguruController;
use App\Http\Controllers\SedangdipinjamController;
use App\Http\Controllers\PeminjamanadminController;
use App\Http\Controllers\RiwayatpeminjamController;
use App\Http\Controllers\BarangmasukadminController;
use App\Http\Controllers\BarangPinjamGuruController;
use App\Http\Controllers\PengembalianadminController;

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

// Route::get('/indexadmin', function () {
//     $jumlahpengajuan = Pengajuan::count();

//     return view('admin.index', compact('jumlahpengajuan'));
// });

//login

Route::get('/masuk', [LoginController::class, 'login'])->name('masuk');
Route::post('/loginproses', [LoginController::class, 'loginproses'])->name('loginproses');

Route::get('/select', [LoginController::class, 'select'])->name('select');

Route::get('/register', [LoginController::class, 'register'])->name('register');
Route::get('/registersiswa', [LoginController::class, 'registersiswa'])->name('registersiswa');

Route::post('/simpanregister', [LoginController::class, 'simpanregister'])->name('simpanregister');
Route::post('/simpansiswa', [LoginController::class, 'simpansiswa'])->name('simpansiswa');

Route::get('/logout', [LoginController::class, 'logout'])->name('logout');



//Admin

Route::group(['middleware' => ['auth', 'level:admin']], function () {

    Route::get('/indexadmin', [IndexController::class, 'indexadmin'])->name('indexadmin');

    // $totalpengajuan = Employee::count();
    // $menunggupersetujuan = Employee::where('jeniskuetart', 'ultah')->count();
    // $disetujui = Employee::where('jeniskuetart', 'karakter')->count();
    // $ditolak = Employee::where('jeniskuetart', 'hari spesial')->count();
    // return view('welcome', compact('totalpengajuan', 'menunggupersetujuan', 'disetujui', 'ditolak'));
// })->middleware('auth');

    Route::get('/ruangan', [RuanganController::class, 'ruangan'])->name('ruangan');
    Route::get('/editprofileadmin', [IndexController::class, 'editprofileadmin'])->name('editprofileadmin');
    Route::get('/profileadmin', [IndexController::class, 'profileadmin'])->name('profileadmin');
    Route::post('/insertadmin', [IndexController::class, 'insertadmin'])->name('insertadmin');

 //ruangan
 Route::get('/search', [RuangController::class, 'ruang'])->name('search');
 Route::get('/ruang', [RuangController::class, 'ruang'])->name('ruang');
 Route::get('/ruangan', [RuangController::class, 'ruangan'])->name('ruangan');
 Route::get('/tambahruang', [RuangController::class, 'tambahruang'])->name('tambahruang');
 Route::post('/insertruang', [RuangController::class, 'insertruang'])->name('insertruang');
 Route::get('/tampilkanruang/{p}', [RuangController::class, 'tampilkanruang'])->name('tampilkanruang');
 Route::post('/updateruang/{p}', [RuangController::class, 'updateruang'])->name('updateruang');
 Route::get('/deleteruang/{p}', [RuangController::class, 'delete'])->name('deleteruang');

//  //detail ruangan

//  Route::get('/detailruangan{id}', [RuangController::class, 'detailruangan'])->name('detailruangan');


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
// Data Barang

    // Barang Tidak Habis
    Route::get('/databarang', [databarangController::class, 'index'])->name('databarang')->middleware('auth');
    Route::get('/tambahdatabarang', [databarangController::class, 'tambahdatabarang'])->name('tambahdatabarang');
    Route::post('/insertdatabarang', [databarangController::class, 'insertdatabarang'])->name('insertdatabarang');
    Route::get('/tampilkandatabarang/{p}', [databarangController::class, 'tampilkandatabarang'])->name('tampilkandatabarang');
    Route::post('/updatedatabarang/{p}', [databarangController::class, 'updatedatabarang'])->name('updatedatabarang');
    Route::get('/deletedatabarang/{p}', [databarangController::class, 'delete'])->name('deletedatabarang');

    // Barang Habis
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

    //permintaan peminjaman
    Route::get('/peminjamanadmin', [PeminjamanadminController::class, 'peminjamanadmin'])->name('peminjamanadmin');


    //daftar riwayat
    Route::get('/dikembalikan', [DikembalikanController::class, 'dikembalikan'])->name('dikembalikan');
    Route::get('/sedangdipinjam', [SedangdipinjamController::class, 'sedangdipinjam'])->name('sedangdipinjam');
    Route::get('/riwayatpengajuan', [PengajuanController::class, 'riwayatpengajuan'])->name('riwayatpengajuan');


    //pengajuan guru
    Route::get('/daftarguru', [DaftarguruController::class, 'daftarguru'])->name('daftarguru');


    //barang masuk (stock opname)
    //barang habis
    Route::get('/masukadmin', [barangmasukController::class, 'masukadmin'])->name('masukadmin');
    Route::get('/tambah_stok', [barangmasukController::class, 'tambah_stok'])->name('tambah_stok');
    Route::post('/insert_stok_baranghabis', [barangmasukController::class, 'insert_stok_baranghabis'])->name('insert_stok_baranghabis');
    Route::get('/deletestok_baranghabis/{id}', [barangmasukController::class, 'deletestok_baranghabis'])->name('deletestok_baranghabis');
    //barang tidak habis
    Route::get('/barangmasukadmin', [BarangmasukadminController::class, 'barangmasukadmin'])->name('barangmasukadmin');
    Route::get('/tambahstok', [BarangmasukadminController::class, 'tambahstok'])->name('tambahstok');
    Route::post('/insert', [BarangmasukadminController::class, 'insert'])->name('insert');
    Route::get('/delete/{id}', [BarangmasukadminController::class, 'delete'])->name('delete');


    //user
    Route::get('/user', [userController::class, 'user'])->name('user');
    Route::get('/deleteuser/{p}', [userController::class, 'deleteuser'])->name('deleteuser');
    Route::group(['middleware' => 'auth'], function () {
        Route::get('/changePassworda', [guruController::class, 'showChangePasswordGeta'])->name('changePasswordGeta');
        Route::post('/changePassworda', [guruController::class, 'changePasswordPosta'])->name('changePasswordPosta');
    });
});


    //ruangan

    Route::get('/ruang', [RuangController::class, 'ruang'])->name('ruang');
    Route::get('/ruangan', [RuangController::class, 'ruangan'])->name('ruangan');
    Route::get('/tambahruang', [RuangController::class, 'tambahruang'])->name('tambahruang');
    Route::post('/insertruang', [RuangController::class, 'insertruang'])->name('insertruang');
    Route::get('/tampilkanruang/{p}', [RuangController::class, 'tampilkanruang'])->name('tampilkanruang');
    Route::post('/updateruang/{p}', [RuangController::class, 'updateruang'])->name('updateruang');
    Route::get('/deleteruang/{p}', [RuangController::class, 'delete'])->name('deleteruang');

    //detail ruangan

    Route::get('/detailruangan/{id}', [RuangController::class, 'detailruangan'])->name('detailruangan');


//pengajuanguru
Route::get('/pengajuanguru', [PengajuanController::class, 'index'])->name('pengajuanguru')->middleware('auth');
Route::get('/pengajuanguru/{status}/{id}', [PengajuanController::class, 'updateStatus'])->middleware('auth');
// Route::get('/pengajuanguru/{status}/{id}', [PengajuanController::class, 'updateStatus'])->middleware('auth');
Route::get('/riwayat_pengajuan_guru', [PengajuanController::class, 'riwayat_pengajuan_guru'])->name('riwayat_pengajuan_guru');
Route::get('/tambahp', [PengajuanController::class, 'tambahp'])->name('tambahp');
Route::post('/insertp', [PengajuanController::class, 'insertp'])->name('insertp');
Route::get('/daftarp', [PengajuanController::class, 'daftarp']);

//Guru

Route::group(['middleware' => ['auth', 'level:guru']], function () {

    Route::get('/indexguru', [IndexController::class, 'indexguru'])->name('indexguru');
    Route::get('/editprofileguru', [IndexController::class, 'editprofileguru'])->name('editprofileguru');
    Route::get('/profileguru', [IndexController::class, 'profileguru'])->name('profileguru');
    Route::get('/pengajuan', [PengajuanController::class, 'pengajuan'])->name('pengajuan');
    Route::get('/barangpinjamguru', [BarangPinjamGuruController::class, 'barangpinjamguru'])->name('barangpinjamguru');
    Route::get('/riwayatguru', [RiwayatController::class, 'riwayatguru'])->name('riwayatguru');
    Route::get('/pinjamguru', [PeminjamanguruController::class, 'pinjamguru'])->name('pinjamguru');
    Route::post('/editguru', [IndexController::class, 'insertguru'])->name('editguru');
    Route::group(['middleware' => 'auth'], function () {
        Route::get('/changePasswordg', [IndexController::class, 'showChangePasswordGetg'])->name('changePasswordGetg');
        Route::post('/changePasswordg', [IndexController::class, 'changePasswordPostg'])->name('changePasswordPostg');
    });
});

//Siswa

Route::group(['middleware' => ['auth', 'level:siswa']], function () {

    Route::get('/indexsiswa', [IndexController::class, 'indexsiswa'])->name('indexsiswa');
    Route::get('/editprofile', [IndexController::class, 'editprofile'])->name('editprofile');
    Route::get('/profile', [IndexController::class, 'profile'])->name('profile');
    Route::get('/barangdipinjam', [BarangdipinjamController::class, 'barangdipinjam'])->name('barangdipinjam');
    Route::get('/riwayatpeminjaman', [RiwayatpeminjamController::class, 'riwayatpeminjaman'])->name('riwayatpeminjaman');
    Route::get('/pinjambarang', [PinjambarangController::class, 'pinjambarang'])->name('pinjambarang');
    Route::post('/editsiswa', [IndexController::class, 'insert'])->name('editsiswa');
    Route::group(['middleware' => 'auth'], function () {
        Route::get('/changePassword', [HomeController::class, 'showChangePasswordGet'])->name('changePasswordGet');
        Route::post('/changePassword', [HomeController::class, 'changePasswordPost'])->name('changePasswordPost');
    });
});

//user
Route::get('/user', [userController::class, 'user'])->name('user');
Route::get('/deleteuser/{p}', [userController::class, 'deleteuser'])->name('deleteuser');

//guru tapilan stok
Route::get('/data1', [guruController::class, 'data1'])->name('data1');
Route::get('/data2', [guruController::class, 'data2'])->name('data2');

//peminjaman barang guru
Route::get('/pinjamguruh',[PengajuanController::class,'pinjamguruh'])->name('pinjamguruh');
Route::get('/pinjamgr',[PengajuanController::class,'pinjamgr'])->name('pinjamgr');
Route::get('/pinjam_baranghabis',[PengajuanController::class,'pinjam_baranghabis'])->name('pinjam_baranghabis');
Route::post('/insertpinjam_guru2',[PengajuanController::class,'insertpinjam_guru2'])->name('insertpinjam_guru2');
Route::get('/barang_tdkhabis',[PengajuanController::class,'barang_tdkhabis'])->name('barang_tdkhabis');
Route::post('/insertpinjam_guru',[PengajuanController::class,'insertpinjam_guru'])->name('insertpinjam_guru');
Route::get('/balik/{id}', [PengajuanController::class, 'balik']);
Route::get('/kembalig', [PengajuanController::class, 'kembalig']);
Route::get('/pinjamgru/{status}/{id}', [PengajuanController::class, 'updateStatusk'])->middleware('auth');
Route::get('/riwayatpinjam', [PengajuanController::class, 'riwayatpinjam'])->name('riwayatpinjam');
Route::get('/riwayatpinjamgr', [PengajuanController::class, 'riwayatpinjamgr']);


//peminjaman barang siswa
Route::get('/pinjambarang',[PinjambarangController::class,'pinjambarang'])->name('pinjambarang');
Route::post('/insertpinjamsiswa',[PinjambarangController::class,'insertpinjamsiswa'])->name('insertpinjamsiswa');
Route::get('/peminjamanadmin',[PinjambarangController::class,'peminjamanadmin'])->name('peminjamanadmin');
Route::get('/datapinjam',[PinjambarangController::class,'peminjamansiswa']);
Route::get('/pinjamsiswa/{status}/{id}', [PinjambarangController::class, 'updateStatus3'])->middleware('auth');
Route::get('/daftars', [PinjambarangController::class, 'dafsis']);
Route::get('/tolaks', [PinjambarangController::class, 'tolaks']);
Route::get('/riwayatsw', [PinjambarangController::class, 'riwayatsw']);
Route::get('/peminjamans/{id}', [PinjambarangController::class, 'pensis']);
Route::get('/pengembalianadmin', [PinjambarangController::class, 'pengembalianadmin']);
Route::get('/kembalis/{status}/{id}', [PinjambarangController::class, 'updateStatus2'])->middleware('auth');
Route::get('/kembalisis', [PinjambarangController::class, 'kembalisis']);


//reset password
Route::get('forget-password', [ForgotPasswordController::class, 'ForgetPassword'])->name('ForgetPasswordGet');
Route::post('forget-password', [ForgotPasswordController::class, 'ForgetPasswordStore'])->name('ForgetPasswordPost');
Route::get('reset-password/{token}', [ForgotPasswordController::class, 'ResetPassword'])->name('ResetPasswordGet');
Route::post('reset-password', [ForgotPasswordController::class, 'ResetPasswordStore'])->name('ResetPasswordPost');

// Grafik
Route::get('/grafik', [IndexController::class, 'grafik'])->name('grafik');


