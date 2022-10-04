<?php

namespace App\Http\Controllers;

use App\Models\Baranghabis;
use Illuminate\Http\Request;
use App\Models\databarang;


class guruController extends Controller
{
    public function data1()
    {
        $data = databarang::all();

        return view('guru.databarang.barang', compact('data'));
    }

    public function data2()
    {
        $data = Baranghabis::all();

        return view('guru.databarang.baranghabis', compact('data'));
    }

}
