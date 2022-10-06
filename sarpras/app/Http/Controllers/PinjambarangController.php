<?php

namespace App\Http\Controllers;

use App\Models\Pinjambarang;
use Illuminate\Http\Request;

class PinjambarangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function pinjambarang()
    {
        $pinjambarang = Pinjambarang::all();

        return view('siswa.pinjambarang.pinjam', compact('pinjambarang'));
    }

    public function pinjambarangguru()
    {
        $pinjambarangguru = Pinjambarang::all();

        return view('guru.pinjam.pinjam_barang', compact('pinjambarangguru'));
    }
}
