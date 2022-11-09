<?php

namespace App\Http\Controllers;

use App\Models\Pinjambarang;
use Illuminate\Http\Request;
use App\Models\peminjamanadmin;

class PinjambarangController extends Controller
{
    //admin
    public function peminjamanadmin()
    {
        $peminjaman = peminjamanadmin::all();
        $peminjaman = peminjamanadmin::where('status3', null)->get();

        return view('admin.permintaan_peminjaman.peminjaman', compact('peminjaman'));
    }

    public function peminjamansiswa()
    {
        $peminjaman = peminjamanadmin::all();
        $peminjaman = peminjamanadmin::where('status3', 'Dipinjam')->orwhere('status3', null)->get();
        return view('siswa.barang_dipinjam.barangdipinjam', compact('peminjaman'));
    }
    public function dafsis()
    {
        $peminjaman = peminjamanadmin::where('status3', 'Dipinjam')->get();
        return view('admin.permintaan_peminjaman.peminjaman_siswa', compact('peminjaman'));
    }
    public function tolaks()
    {
        $peminjaman = peminjamanadmin::where('status3', 'Ditolak')->orwhere('status3', 'Telah Dikembalikan')->get();
        return view('siswa.riwayat.riwayat_tolak', compact('peminjaman'));
    }
    public function riwayatsw()
    {
        $peminjaman = peminjamanadmin::where('status3', 'Ditolak')->orwhere('status3', 'Telah Dikembalikan')->get();
        return view('admin.daftar_riwayat.sedangpinjam', compact('peminjaman'));
    }
    public function updateStatus3($status, $id){
        $data = peminjamanadmin::where('id', $id)->first();

        if($status == 'terima'){
            $data->update(['status3' => 'Dipinjam']);
        }elseif($status == 'tolak'){
            $data->update(['status3' => 'Ditolak']);
        }else{
            return redirect()->back();
        }

        return redirect('daftars');
    }
    public function pengembalianadmin()
    {
        $peminjaman = peminjamanadmin::where('status3', 'Menunggu Persetujuan')->get();
        return view('siswa.permintaan_pengembalian.pengembalian', compact('peminjaman'));
    }
    public function pensis($id)
    {
        $peminjaman = peminjamanadmin::where('id',$id)->update(['status3' => 'Menunggu Persetujuan']);
        return redirect('datapinjam')->with('message','Pesan berhasil dikirimkan');
    }
    public function kembalisis()
    {
        $pinjambarang = Pinjambarang::where('status3', 'Menunggu Persetujuan')->get();
        return view('admin.permintaan_pengembalian.kembali_siswa', compact('pinjambarang'));
    }

    //siswa
    public function pinjambarang()
    {
        $pinjambarang = Pinjambarang::all();

        return view('siswa.pinjambarang.pinjam', compact('pinjambarang'));
    }

    public function insertpinjamsiswa(Request $request)
    {
        $peminjaman = Pinjambarang::create($request->all());
        return redirect('datapinjam')->with('success','Data Terkirim Ke Admin');
    }

    public function updateStatus2($status, $id){
        $data = peminjamanadmin::where('id', $id)->first();

        if($status == 'terima'){
            $data->update(['status3' => 'Telah Dikembalikan']);
        }elseif($status == 'tolak'){
            $data->update(['status3' => 'Ditolak']);
        }else{
            return redirect()->back();
        }

        return redirect('riwayatsw');
    }



}
