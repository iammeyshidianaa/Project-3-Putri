<?php

namespace App\Http\Controllers;

use App\Models\Pinjambarang;
use Illuminate\Http\Request;
use App\Models\peminjamanadmin;

class PinjambarangController extends Controller
{
    public function peminjamanadmin()
    {
        $peminjaman = peminjamanadmin::all();

        return view('admin.permintaan_peminjaman.peminjaman', compact('peminjaman'));
    }


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

    public function pinjambarangguru()
    {
        $pinjambarangguru = Pinjambarang::all();

        return view('guru.pinjam.pinjam_barang', compact('pinjambarangguru'));
    }
}
