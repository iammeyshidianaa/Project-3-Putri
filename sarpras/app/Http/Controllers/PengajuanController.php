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

    //Riwayat Pengajuan Admin

    public function riwayatpengajuan()
    {
        return view('admin.daftar_riwayat.pengajuan');
    }

     //Riwayat Pengajuan Guru

    public function riwayat_pengajuan_guru()
    {
        return view('guru.riwayat_guru.pengajuan');
    }

}
