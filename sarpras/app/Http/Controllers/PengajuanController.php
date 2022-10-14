<?php

namespace App\Http\Controllers;

use App\Models\Pengajuan;

use Illuminate\Http\Request;

class PengajuanController extends Controller
{
    // public function jumlahpengajuan(){

    //     $data = Pengajuan::all();
    //     return view ('pengajuanguru',compact('data'));
    //     }

    public function index()
    {
        $data = Pengajuan::all();
        return view('admin.pengajuan.pengajuanguru', compact('data'));
    }
    public function tambahp()
    {
        return view('guru.pengajuan.pengajuan');
    }
    public function insertp(Request $request)
    {
        $data = Pengajuan::create($request->all());
        return redirect('tambahp')->with('message','Data berhasil ditambahkan');

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
