<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\merk;

class merkController extends Controller
{
    //merk//
    public function merkk(){

        $data = merk::all();
        return view('relasi.merk', compact('data'));
    }

    public function merk_tambah()
    {
        return view('relasi.merk_tambah');
    }

    public function merk_edit($id)
    {
        $data = merk::findOrFail($id);
        return view('relasi.merk_edit', compact('data'));
    }
    public function insertmerk(request $request){


        $data = merk::create([
            'merkk' => $request->merkk,

        ]);

        return redirect()->route('merkk')->with('message','Data berhasil ditambahkan');

    }
    public function updatemerk(request $request, $id){
        $data = merk::find($id);
        $data->update($request->all());

        return redirect()->route('merkk')->with('success',' Data Berhasil Di Edit');
    }
    public function deletemerk($id){
        $data = merk::find($id);
        $data->delete();

        return redirect()->route('merkk')->with('success',' Data Berhasil Di Hapus');
}
}
