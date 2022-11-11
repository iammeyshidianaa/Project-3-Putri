<?php

namespace App\Http\Controllers;

use App\Models\databarang;
use Illuminate\Http\Request;
use App\Models\barangmasukadmin;

class BarangmasukadminController extends Controller
{

    public function barangmasukadmin()
    {
        $barangmasukadmin =  barangmasukadmin::all();

        return view('admin.barangmasuk.tidakhabis', compact('barangmasukadmin'));
    }

    public function tambahstok()
    {
        $barangtdkhabis =  databarang::all();

        return view('admin.barangmasuk.tambah_tidakhabis', compact('barangtdkhabis'));
    }

    public function insert(Request $request)
    {
        $pesan = [
            'required' => ':attribute wajib di isi!',
            'min' => ':attribute harus diisi minimal :3 min karakter',
            'max' => ':attribute harus diisi maksimal :12 max karakter',
            'numeric' => 'harus di isi angka!',

        ];
        // dd($request->all());
        $this->validate($request, [
            'nama2' => 'required',
            'tanggal_pembelian' => 'required',
            'stok' => 'numeric',

        ], $pesan);
        //  dd('d');

        $barus = barangmasukadmin::where('nama2', '=', $request->nama2)->First();

        //  dd($baru);
        if(is_null($barus)) {
            $data = barangmasukadmin::create($request->all());
            $barubaru = databarang::where('nama_barang', '=', $request->nama2)->First();
            $jumlah_stok = $barubaru->jumlah_stok;
            $stokup = $jumlah_stok + $request->stok;
            $barubaru->update(['jumlah_stok' => $stokup]);

        } else {
            $baruu = databarang::where('nama_barang', '=', $request->nama2)->First();
            $stoksekarang = $barus->stok;
            $jumlah_stok = $baruu->jumlah_stok;
            $stokupdate = $stoksekarang + $request->stok;
            $stokup = $jumlah_stok + $request->stok;
            $barus->update(['stok' => $stokupdate]);
            $baruu->update(['jumlah_stok' => $stokup]);
        }

        return redirect()->route('barangmasukadmin')->with('message','Stok berhasil ditambahkan');

    }

    public function delete($id)
    {
        $data = barangmasukadmin::find($id);
        $data->delete($id);
        return redirect()->route('barangmasukadmin')->with('message', 'Data berhasil di hapus');
    }
}
