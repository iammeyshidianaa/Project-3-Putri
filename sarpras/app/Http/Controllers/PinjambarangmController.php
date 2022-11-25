<?php

namespace App\Http\Controllers;

use App\Models\Baranghabis;
use App\Models\databarang;
use App\Models\Pinjambarang;
use Illuminate\Http\Request;
use App\Models\peminjamanadmin;

class PinjambarangController extends Controller
{
    //admin
    public function peminjamanadmin()
    {
        $peminjaman = peminjamanadmin::all();

        return view('admin.permintaan_peminjaman.peminjaman', compact('peminjaman'));
    }

    //guru barang tdk habis
    public function pinjambarang_guru()
    {
        $pinjambarang = Pinjambarang::all();
        //nama barang
        $namabarang = databarang::all();

        return view('guru.peminjaman.pinjam_tdkhabis', compact('pinjambarang','namabarang'));
    }

    public function insertpinjam_guru(Request $request)
    {
        $peminjaman = Pinjambarang::create($request->all());
        return redirect('pinjambarang_guru')->with('success','Data Terkirim Ke Admin');
    }

    //guru barang habis
    public function barang_habis()
    {
        $pinjambarang = Pinjambarang::all();
        //nama barang
        $namabarangs = Baranghabis::all();

        return view('guru.peminjaman.pinjamhabis', compact('pinjambarang','namabarangs'));
    }

    public function insertpinjam_guru2(Request $request)
    {
        $peminjaman = Pinjambarang::create($request->all());
        return redirect('pinjamhabis')->with('success','Data Terkirim Ke Admin');
    }

    //siswa
    public function pinjambarang()
    {
        $pinjambarang = Pinjambarang::all();
         // pinjam barang siswa
         $namabarangsiswa = databarang::all();

        return view('siswa.pinjambarang.pinjam', compact('pinjambarang','namabarangsiswa'));
    }

    public function insertpinjamsiswa(Request $request)

    {
        

        return redirect('pinjambarang')->with('success','Data Terkirim Ke Admin');
    }

}
