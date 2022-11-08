<?php

namespace App\Http\Controllers;

use App\Models\Pengajuan;
use App\Models\pinjamguru;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class PengajuanController extends Controller
{
    public function index()
    {
        $data = Pengajuan::where('statusp', null)->get();
        return view('admin.pengajuan.pengajuanguru', compact('data'));
    }
    public function daftarp()
    {
        $data = Pengajuan::where('statusp', null)->get();
        return view('guru.pengajuan.daftarp', compact('data'));
    }
    public function tambahp()
    {
        return view('guru.pengajuan.pengajuan');
    }
    public function insertp(Request $request)
    {
        $data = Pengajuan::create($request->all());
        return redirect('daftarp')->with('message','Data berhasil ditambahkan');
    }

    //Riwayat Pengajuan Admin

    public function riwayatpengajuan()
    {
        $data = Pengajuan::where('statusp', 'disetujui')->orwhere('statusp', 'ditolak')->get();
        return view('admin.daftar_riwayat.pengajuan')->with(compact('data'));
    }

     //Riwayat Pengajuan Guru

    public function riwayat_pengajuan_guru()
    {
        $data = Pengajuan::where('statusp', 'disetujui')->orwhere('statusp', 'ditolak')->get();

        return view('guru.riwayat_guru.pengajuan')->with(compact('data'));
    }

    public function updateStatus($status, $id){
        $data = Pengajuan::where('id', $id)->first();

        if($status == 'terima'){
            $data->update(['statusp' => 'Disetujui']);
        }elseif($status == 'tolak'){
            $data->update(['statusp' => 'Ditolak']);
        }else{
            return redirect()->back();
        }

        return redirect('riwayatpengajuan');
    }


     //guru
     public function pinjamguruh()
     {
         $data = pinjamguru::where('statusk', null)->orwhere('statusk', 'Menunggu Persetujuan')->get();
         return view('guru.pinjam.barangpinjam', compact('data'));
     }
     public function tambahg()
     {
         return view('guru.peminjaman.peminjamanguru');
     }
     public function insertgurua(Request $request)
     {
         $data = pinjamguru::create($request->all());
         return redirect('pinjamguruh')->with('success','Data Terkirim Ke Admin');
     }
     public function pinjamgr()
     {
         $data = pinjamguru::where('statusk', null)->get();
         return view('admin.permintaan_peminjaman.pinjamguru', compact('data'));
     }

     public function balik($id)
    {
        $data = pinjamguru::where('id',$id)->update(['statusk' => 'Menunggu Persetujuan']);
        return redirect('pinjamguruh')->with('message','Pesan berhasil dikirimkan');
    }
    public function kembalig()
    {
        $data = pinjamguru::where('statusk', 'Menunggu Persetujuan')->get();
        return view('admin.permintaan_pengembalian.pengembalian')->with(compact('data'));
    }

    public function riwayatpinjam()
    {
        $data = pinjamguru::where('statusk', 'disetujui')->orwhere('statusk', 'ditolak')->get();
        return view('admin.daftar_riwayat.dikembalikan')->with(compact('data'));
    }

    public function riwayatpinjamgr()
    {
        $data = pinjamguru::where('statusk', 'disetujui')->orwhere('statusk', 'ditolak')->get();
        return view('guru.riwayat_guru.riwayatguru')->with(compact('data'));
    }


    public function updateStatusk($status, $id){
        $data = pinjamguru::where('id', $id)->first();

        if($status == 'terimah'){
            $data->update(['statusk' => 'Disetujui']);
        }elseif($status == 'tolakh'){
            $data->update(['statusk' => 'Ditolak']);
        }else{
            return redirect()->back();
        }

        return redirect('riwayatpinjam');
    }



}
