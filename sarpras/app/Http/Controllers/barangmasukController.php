<?php

namespace App\Http\Controllers;

use App\Models\barangmasuk;
use Illuminate\Http\Request;

class barangmasukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = barangmasuk::all();

        return view('admin.barangmasuk.barangmasuk', compact('data'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function tambahbarangmasuk()
    {
        return view('admin.barangmasuk.tambahbarangmasuk');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function insertbarangmasuk(Request $request)
    {
        $pesan = [
            'required' => ':attribute wajib di isi!',
            'min' => ':attribute harus diisi minimal : min karakter',
            'max' => ':attribute harus diisi maksimal : max karakter',
            'numeric' => 'harus di isi angka!',


        ];
        $this->validate($request, [
            'kategori2' => 'required',
            'namabarang' => 'required|min:3|max:50',
            'merek_barang' => 'required|min:3|max:50',
            'tanggal_pembelian' => 'required',
            'jumlah' => 'numeric',
            'asal_barang' => 'required',
        ], $pesan);

        $data = barangmasuk::create($request->all());

        return redirect()->route('barangmasuk')->with('message','Data berhasil ditambahkan');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function tampilkanbarangmasuk($id)
    {

        $data = barangmasuk::findOrFail($id);
        $data = barangmasuk::find($id);

        return view('admin.barangmasuk.tampilbarangmasuk', compact('data'));
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
    public function updatebarangmasuk(Request $request, $id)
    {
        $pesan = [
            'required' => ':attribute wajib di isi!',
            'min' => ':attribute harus diisi minimal : min karakter',
            'max' => ':attribute harus diisi maksimal : max karakter',
            'numeric' => 'harus di isi angka!',


        ];
        $this->validate($request, [
            'kategori2' => 'required|min:3|max:50',
            'namabarang' => 'required|min:3|max:50',
            'merek_barang' => 'required|min:3|max:50',
            'tanggal_pembelian' => 'required',
            'jumlah' => 'numeric',
            'asal_barang' => 'required',
        ], $pesan);

        $data = barangmasuk::findOrFail($id);
        $data = barangmasuk::find($id);

        $data->update([
            'kategori2' => $request->kategori2,
            'namabarang' => $request->namabarang,
            'merek_barang' => $request->merek_barang,
            'tanggal_pembelian' => $request->tanggal_pembelian,
            'jumlah' => $request->jumlah,
            'asal_barang' => $request->asal_barang,

        ]);

        return redirect()->route('barangmasuk')->with('message', 'Data berhasil di edit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $data = barangmasuk::find($id);
        $data->delete($id);
        return redirect()->route('barangmasuk')->with('message', 'data berhasil di hapus');
    }
}
