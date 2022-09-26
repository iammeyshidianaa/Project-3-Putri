<?php

namespace App\Http\Controllers;

use App\Models\databarang;
use Illuminate\Http\Request;

class databarangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = databarang::all();

        return view('admin.barang.databarang', compact('data'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function tambahdatabarang()
    {
        return view('admin.barang.tambahdatabarang');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function insertdatabarang(Request $request)
    {
        $pesan = [
            'required' => ':attribute wajib di isi!',
            'min' => ':attribute harus diisi minimal : min karakter',
            'max' => ':attribute harus diisi maksimal : max karakter',
            'numeric' => 'harus di isi angka!',


        ];
        $this->validate($request, [
            'kategori' => 'required|min:3|max:50',
            'nama_barang' => 'required|min:1|max:12',
            'merek' => 'required|min:1|max:10',
            'stok' => 'numeric',
        ], $pesan);

        $data = databarang::create($request->all());

        return redirect()->route('databarang')->with('message','Data berhasil ditambahkan');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function tampilkandatabarang($id)
    {

        $data = databarang::findOrFail($id);
        $data = databarang::find($id);

        return view('admin.barang.tampildatabarang', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updatedatabarang(Request $request, $id)
    {
        $pesan = [
            'required' => ':attribute wajib di isi!',
            'min' => ':attribute harus diisi minimal : min karakter',
            'max' => ':attribute harus diisi maksimal : max karakter',
            'numeric' => 'harus di isi angka!',


        ];
        $this->validate($request, [
            'kategori' => 'required|min:3|max:50',
            'nama_barang' => 'required|min:1|max:12',
            'merek' => 'required|min:1|max:10',
            'stok' => 'numeric',
        ], $pesan);

        $data = databarang::findOrFail($id);
        $data = databarang::find($id);

        $data->update([
            'kategori' => $request->kategori,
            'nama_barang' => $request->nama_barang,
            'merek' => $request->merek,
            'stok' => $request->stok,

        ]);

        return redirect()->route('databarang')->with('message', 'Data berhasil di edit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $data = databarang::find($id);
        $data->delete($id);
        return redirect()->route('databarang')->with('message', 'data berhasil di hapus');
    }
}
