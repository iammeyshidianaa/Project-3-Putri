<?php

namespace App\Http\Controllers;

use App\Models\BarangPinjamGuru;
use Illuminate\Http\Request;

class BarangPinjamGuruController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function barangpinjamguru()
    {
        $pinjam = BarangPinjamGuru::all();

        return view('guru.barangpinjam.barangpinjam', compact('pinjam'));
    }


    public function denda()
    {
        // $pinjam = BarangPinjamGuru::all();

        return view('guru.barangpinjam.denda',);
    }
}
