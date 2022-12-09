<?php

namespace App\Http\Controllers;

use App\Models\Pengajuan;
use App\Models\databarang;
use App\Models\pinjamguru;
use App\Models\Baranghabis;
use App\Models\Pinjambarang;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Redirect;
use App\Exports\RiwayatPinjam_guruExport;
use App\Exports\RiwayatPengajuan_guruExport;

class PengajuanController extends Controller
{
    // public function index()
    // {
    //     $data = Pengajuan::where('statusp', null)->get();
    //     return view('admin.pengajuan.pengajuanguru', compact('data'));
    // }
    public function index()
    {
        $data = Pengajuan::all();
        return view('admin.pengajuan.pengajuanguru', compact('data'));
    }
    // public function daftarp()
    // {
    //     $data = Pengajuan::where('statusp', null)->get();
    //     return view('guru.pengajuan.daftarp', compact('data'));
    // }
    public function daftarp()
    {
        $data = Pengajuan::all();
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


//(status) barang di pinjam -> (guru)
     public function pinjamguruh()
     {
         $data = pinjamguru::where('statusk', null)->orwhere('statusk', 'Menunggu Persetujuan')->get();
         return view('guru.pinjam.barangpinjam', compact('data'));
     }
//Peminjaman guruzzzz
     // barang habis
    public function pinjam_baranghabis()
    {
        //nama barang
        $namabarang = Baranghabis::with('ruang')->get();

        return view('guru.peminjaman.pinjam_habis', compact('namabarang'));
    }

    public function insertpinjam_guru2(Request $request)
    {
        $peminjaman = pinjamguru::create($request->all());
        return redirect('pinjamguruh')->with('success','Data Terkirim Ke Admin');
    }

      // barang tidak habis
     public function barang_tdkhabis()
    {
       //nama barang
       $namabarangs = databarang::with('ruang')->get();

       return view('guru.peminjaman.pinjam_tdkhabis', compact('namabarangs'));
    }

    public function insertpinjam_guru(Request $request)
   {
       $peminjaman = pinjamguru::create($request->all());
       return redirect('pinjamguruh')->with('success','Data Terkirim Ke Admin');
   }

// peminjaman guru -> (admin)
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

    // pdf & excel pengembalian guru
    public function pdfguru()
    {
        $data = pinjamguru::all();

        view()->share('data', $data);
        $pdf = Pdf::loadview('admin.daftar_riwayat.pengembalianguru-pdf');
        return $pdf->download('Riwayat_Peminjaman_Guru.pdf');
    }

    public function excelguru()
    {
        return Excel::download(new RiwayatPinjam_guruExport, 'Riwayat_Peminjaman_Guru.xlsx');
    }

    // PDF & EXCEL pengajuan guru
    public function pdfpengajuanguru()
    {
        $data = Pengajuan::all();

        view()->share('data', $data);
        $pdf = Pdf::loadview('admin.daftar_riwayat.pengajuan-pdf');
        return $pdf->download('Riwayat_Pengajuan_Guru.pdf');
    }

    public function excelpengajuanguru()
    {
        return Excel::download(new RiwayatPengajuan_guruExport, 'Riwayat_Pengajuan_Guru.xlsx');
    }




}
