<?php

namespace App\Http\Controllers;

use App\Models\daftarguru;
use Illuminate\Http\Request;

class DaftarguruController extends Controller
{

    public function daftarguru()
    {
        $daftarguru = Daftarguru::all();

        return view('admin.pengajuan.pengajuanguru', compact('daftarguru'));
    }

}
