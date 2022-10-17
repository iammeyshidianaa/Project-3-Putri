<?php

namespace App\Http\Controllers;

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

    //guru
    public function pinjambarang_guru()
    {
        $pinjambarang = Pinjambarang::all();

        return view('guru.peminjaman.peminjamanguru', compact('pinjambarang'));
    }

    public function insertpinjam_guru(Request $request)
    {
        $peminjaman = Pinjambarang::create($request->all());
        return redirect('pinjambarang_guru')->with('success','Data Terkirim Ke Admin');
    }

    //siswa
    public function pinjambarang()
    {
        $pinjambarang = Pinjambarang::all();

        return view('siswa.pinjambarang.pinjam', compact('pinjambarang'));
    }

    public function insertpinjamsiswa(Request $request)
    {
        $peminjaman = Pinjambarang::create($request->all());
        return redirect('pinjambarang')->with('success','Data Terkirim Ke Admin');
    }

}
