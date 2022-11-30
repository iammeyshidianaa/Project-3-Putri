<?php

namespace App\Http\Controllers;

use App\Models\ruang;
use App\Models\databarang;
use App\Models\Pinjambarang;
use Illuminate\Http\Request;
use App\Models\peminjamanadmin;
use Barryvdh\DomPDF\Facade\Pdf;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\RiwayatPinjam_siswaExport;

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
        $nbs = databarang::all();

        return view('siswa.barang_dipinjam.barangdipinjam', compact('peminjaman', 'nbs'));
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
    public function updateStatus3($status, $id)
    {
        $data = peminjamanadmin::where('id', $id)->first();
        $barus = databarang::where('nama_barang', '=', $data->namabarang3)->First();


        if ($status == 'terima') {
            $data->update(['status3' => 'Dipinjam']);
            $stok1 = $barus->jumlah_stok;

            $datas = $stok1 - $data->jumlah;
            $barus->update(['jumlah_stok' => $datas]);


        } elseif ($status == 'tolak') {
            $data->update(['status3' => 'Ditolak']);
        } else {
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
        $peminjaman = peminjamanadmin::where('id', $id)->update(['status3' => 'Menunggu Persetujuan']);
        return redirect('datapinjam')->with('message', 'Pesan berhasil dikirimkan');
    }
    public function kembalisis()
    {
        $pinjambarang = Pinjambarang::where('status3', 'Menunggu Persetujuan')->get();
        return view('admin.permintaan_pengembalian.kembali_siswa', compact('pinjambarang'));
    }

    //siswa
    public function pinjambarang()
    {
        $pinjambarang = Pinjambarang::with('ruang')->get();
        $namabarangs = databarang::all();
        $ruang = ruang::all();

        return view('siswa.pinjambarang.pinjam', compact('pinjambarang', 'namabarangs', 'ruang'));
    }

    public function insertpinjamsiswa(Request $request)
    {
        $peminjaman = Pinjambarang::create($request->all());
        return redirect('datapinjam')->with('success', 'Data Terkirim Ke Admin');
    }

    public function updateStatus2($status, $id)
    {
        $data = peminjamanadmin::where('id', $id)->first();
        $new = databarang::where('nama_barang', '=', $data->namabarang3)->First();

        if ($status == 'terima') {
            $data->update(['status3' => 'Telah Dikembalikan']);
            $stok1 = $new->jumlah_stok;

            $datas = $stok1 + $data->jumlah;
            $new->update(['jumlah_stok' => $datas]);
        } elseif ($status == 'tolak') {
            $data->update(['status3' => 'Ditolak']);
        } else {
            return redirect()->back();
        }

        return redirect('riwayatsw');
    }

    // PDF & EXCEL peminjaman siswa
    public function pdfsiswa()
    {
        $data = peminjamanadmin::all();

        view()->share('data', $data);
        $pdf = Pdf::loadview('admin.daftar_riwayat.pengembalian_siswa-pdf');
        return $pdf->download('Riwayat_Peminjaman_Siswa.pdf');
    }

    public function excelsiswa()
    {
        return Excel::download(new RiwayatPinjam_siswaExport, 'Riwayat_Peminjaman_Siswa.xlsx');
    }
}
