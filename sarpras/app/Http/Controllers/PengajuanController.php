<?php

namespace App\Http\Controllers;

use App\Models\Pengajuan;

use Illuminate\Http\Request;

class PengajuanController extends Controller
{
    public function pengajuan()
    {
        $pengajuan = Pengajuan::all();

        return view('guru.pengajuan.pengajuan', compact('pengajuan'));
    }

}
