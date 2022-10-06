<?php

namespace App\Http\Controllers;

use App\Models\Sedangdipinjam;
use Illuminate\Http\Request;

class SedangdipinjamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function sedangdipinjam()
    {
        return view('admin.daftar_riwayat.sedangpinjam');
    }

}
