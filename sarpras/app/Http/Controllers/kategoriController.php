<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\kategori;

class KategoriController extends Controller
{
    //kategori//
    public function kategorii(){

        $data = kategori::all();
        return view('relasi.kategori', compact('data'));
    }

    public function kategori_tambah()
    {
        return view('relasi.kategori_tambah');
    }

    public function kategori_edit($id)
    {
        $data = kategori::findOrFail($id);
        return view('relasi.kategori_edit', compact('data'));
    }
    public function insertkategori(request $request){
        $validatedData = $request->validate([
            'kategorii' => 'required',
        ]);

        $data = kategori::create([
            'kategorii' => $request->kategorii,

        ]);

        return redirect()->route('kategorii')->with('message','Data berhasil ditambahkan');

    }
    public function updatekategori(request $request, $id){
        $data = kategori::find($id);
        $data->update($request->all());

        return redirect()->route('kategori')->with('success',' Data Berhasil Di Edit');
    }
    public function deletekategori($id){
        $data = kategori::find($id);
        $data->delete();

        return redirect()->route('kategori')->with('success',' Data Berhasil Di Hapus');
}
}
