<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Satuan;

class SatuanController extends Controller
{
    //Satuan//
    public function satuan(){

        $data = Satuan::all();
        return view('relasi.satuan', compact('data'));
    }

    public function tambahsatuan()
    {
         return view('relasi.satuan_tambah');
    }

    public function satuan_edit($id)
    {
        $data = Satuan::findOrFail($id);
        return view('relasi.satuan_edit', compact('data'));
    }

    public function insertsatuan(request $request){


        $data = Satuan::create([
            'satuan' => $request->satuan,

        ]);

        return redirect()->route('satuan')->with('message','Data berhasil ditambahkan');

    }
    public function updatesatuan(request $request, $id){
        $data = Satuan::find($id);
        $data->update($request->all());

        return redirect()->route('satuan')->with('success',' Data Berhasil Di Edit');
    }
    public function deletesatuan($id){
        $data = Satuan::find($id);
        $data->delete();

        return redirect()->route('satuan')->with('success',' Data Berhasil Di Hapus');
}
}
