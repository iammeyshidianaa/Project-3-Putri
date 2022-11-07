<?php

namespace App\Http\Controllers;

use App\Models\Baranghabis;
use App\Models\ruang;
use Illuminate\Http\Request;

class BaranghabisController extends Controller
{
    public function index()
    {
        $data = Baranghabis::all();

        return view('admin.baranghabis.baranghabis', compact('data'));
    }

    public function tambahbaranghabis()
    {
        $data=ruang::all();
        return view('admin.baranghabis.tambahbaranghabis',compact('data'));
    }

    public function insertbaranghabis(Request $request)
    {
        $pesan = [
            'required' => ':attribute wajib di isi!',
            'min' => ':attribute harus diisi minimal : min karakter',
            'max' => ':attribute harus diisi maksimal : max karakter',
            'numeric' => 'harus di isi angka!',

        ];
        // dd($request->all());
        $this->validate($request, [
            'nama_barang1' => 'required|min:1|max:50',
            'stok1' => 'numeric',
            'satuan1' => 'required',
            'deskripsi1' => 'required',

        ], $pesan);

        $data = Baranghabis::create($request->all());

        return redirect()->route('baranghabis')->with('message','Data berhasil ditambahkan');

    }

    public function tampilkanbaranghabis($id)
    {

        $data = Baranghabis::findOrFail($id);
        $data = Baranghabis::find($id);

        return view('admin.baranghabis.tampilbaranghabis', compact('data'));
    }

    public function updatebaranghabis(Request $request, $id)
    {
        $pesan = [
            'required' => ':attribute wajib di isi!',
            'min' => ':attribute harus diisi minimal : min karakter',
            'max' => ':attribute harus diisi maksimal : max karakter',
            'numeric' => 'harus di isi angka!',


        ];
        // dd($request->all());
        $this->validate($request, [
            'nama_barang1' => 'required|min:1|max:100',
            'stok1' => 'numeric',
            'satuan1' => 'required',
            'deskripsi1' => 'required',

        ], $pesan);
         // dd('d');

        $data = Baranghabis::findOrFail($id);
        $data = Baranghabis::find($id);

        $data->update([
            'nama_barang1' => $request->nama_barang1,
            'stok1' => $request->stok1,
            'satuan1' => $request->satuan1,
            'deskripsi1' => $request->deskripsi1,

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
