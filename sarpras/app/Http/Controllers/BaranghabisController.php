<?php

namespace App\Http\Controllers;

use App\Models\Baranghabis;
use Illuminate\Http\Request;

class BaranghabisController extends Controller
{
    public function index()
    {
        $data = Baranghabis::all();

        return view('admin.baranghabis', compact('data'));
    }

    public function tambahbaranghabis()
    {
        return view('admin.tambahbaranghabis');
    }

    public function insertbaranghabis(Request $request)
    {
        $pesan = [
            'required' => ':attribute wajib di isi!',
            'min' => ':attribute harus diisi minimal : min karakter',
            'max' => ':attribute harus diisi maksimal : max karakter',
            'numeric' => 'harus di isi angka!',


        ];
        $this->validate($request, [
            'kategori1' => 'required|min:3|max:50',
            'nama_barang1' => 'required|min:1|max:12',
            'merek1' => 'required|min:1|max:10',
            'stok1' => 'numeric',
        ], $pesan);

        $data = Baranghabis::create($request->all());

        // return redirect()->route('databarang')->with('success', 'data berhasil di tambahkan');
        return redirect()->route('baranghabis')->with('message','Data berhasil ditambahkan');

    }

    public function tampilkanbaranghabis($id)
    {

        $data = Baranghabis::findOrFail($id);
        $data = Baranghabis::find($id);

        return view('admin.tampilbaranghabis', compact('data'));
    }

    public function updatebaranghabis(Request $request, $id)
    {
        $pesan = [
            'required' => ':attribute wajib di isi!',
            'min' => ':attribute harus diisi minimal : min karakter',
            'max' => ':attribute harus diisi maksimal : max karakter',
            'numeric' => 'harus di isi angka!',


        ];
        $this->validate($request, [
            'kategori1' => 'required|min:3|max:50',
            'nama_barang1' => 'required|min:1|max:12',
            'merek1' => 'required|min:1|max:10',
            'stok1' => 'numeric',
        ], $pesan);

        $data = Baranghabis::findOrFail($id);
        $data = Baranghabis::find($id);

        $data->update([
            'kategori1' => $request->kategori1,
            'nama_barang1' => $request->nama_barang1,
            'merek1' => $request->merek1,
            'stok1' => $request->stok1,

        ]);

        return redirect()->route('baranghabis')->with('message', 'Data berhasil di edit');
    }

    public function delete($id)
    {
        $data = Baranghabis::find($id);
        $data->delete($id);
        return redirect()->route('baranghabis')->with('message', 'Data berhasil di hapus');
    }
}
