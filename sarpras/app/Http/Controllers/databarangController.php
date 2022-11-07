<?php

namespace App\Http\Controllers;

use App\Models\databarang;
use Illuminate\Http\Request;
use App\Models\ruang;

class databarangController extends Controller
{

    public function index()
    {
        $data = databarang::all();

        return view('admin.barang_tidakhabis.databarang', compact('data'));
    }

    public function tambahdatabarang()
    {
        $data=ruang::all();
        return view('admin.barang_tidakhabis.tambahdatabarang', compact('data'));
    }

    public function insertdatabarang(Request $request)
    {
        $pesan = [
            'required' => ':attribute wajib di isi!',
            'min' => ':attribute harus diisi minimal : min karakter',
            'max' => ':attribute harus diisi maksimal : max karakter',
            'numeric' => 'harus di isi angka!',


        ];
        $this->validate($request, [
            'nama_barang' => 'required|min:3|max:100',
            'jumlah_stok' => 'numeric',
            'satuan' => 'required',
            'deskripsi' => 'required',
        ], $pesan);

        $data = databarang::create($request->all());

        return redirect()->route('databarang')->with('message','Data berhasil ditambahkan');

    }

    public function tampilkandatabarang($id)
    {

        $data = databarang::findOrFail($id);
        $data = databarang::find($id);

        return view('admin.barang_tidakhabis.tampildatabarang', compact('data'));
    }

    public function updatedatabarang(Request $request, $id)
    {
        $pesan = [
            'required' => ':attribute wajib di isi!',
            'min' => ':attribute harus diisi minimal : min karakter',
            'max' => ':attribute harus diisi maksimal : max karakter',
            'numeric' => 'harus di isi angka!',


        ];
        // dd($request->all());
        $this->validate($request, [
            'nama_barang' => 'required|min:3|max:100',
            'stok' => 'numeric',
            'satuan' => 'required',
            'deskripsi' => 'required',

        ], $pesan);
        // dd('d');

        $data = databarang::findOrFail($id);
        $data = databarang::find($id);

        $data->update([
            'id_barang' => $request->id_barang,
            'id_databarang' => $request->id_databarang,
            'id_kategori' => $request->id_kategori,
            'nama_barang' => $request->nama_barang,
            'merek' => $request->merek,
            'stok' => $request->stok,
            'satuan' => $request->satuan,
            'deskripsi' => $request->deskripsi,

        ]);

        return redirect()->route('databarang')->with('message', 'Data berhasil di edit');
    }

    public function delete($id)
    {
        $data = databarang::find($id);
        $data->delete($id);
        return redirect()->route('databarang')->with('message', 'data berhasil di hapus');
    }
}
