<?php

namespace App\Http\Controllers;

use App\Models\Baranghabis;
use App\Models\barangmasuk;
use Illuminate\Http\Request;

class barangmasukController extends Controller
{
    public function masukadmin()
    {
        $masukadmin = barangmasuk::all();

        return view('admin.barangmasuk.habis', compact('masukadmin'));
    }

    public function tambah_stok()
    {
        $baranghabis =  Baranghabis::all();

        return view('admin.barangmasuk.tambah_habis', compact('baranghabis'));
    }

    public function insert_stok_baranghabis(Request $request)
    {
        $pesan = [
            'required' => ':attribute wajib di isi!',
            'min' => ':attribute harus diisi minimal :3 min karakter',
            'max' => ':attribute harus diisi maksimal :12 max karakter',
            'numeric' => 'harus di isi angka!',

        ];
        $this->validate($request, [
            'nama' => 'required',
            'tanggal_pembelian' => 'required',
            'stok' => 'numeric',

        ], $pesan);

        $data = barangmasuk::create($request->all());

        return redirect()->route('masukadmin')->with('message','Stok berhasil ditambahkan');

    }

    public function deletestok_baranghabis($id)
    {
        $data = barangmasuk::find($id);
        $data->delete($id);
        return redirect()->route('masukadmin')->with('message', 'Data berhasil di hapus');
    }
}
