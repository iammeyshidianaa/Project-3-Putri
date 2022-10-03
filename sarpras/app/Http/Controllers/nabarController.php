<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\nabar;

class nabarController extends Controller
{
    //nabar//
    public function nabarr(){

        $data = nabar::all();
        return view('relasi.nabar', compact('data'));
    }

    public function nabar_tambah()
    {
        return view('relasi.nabar_tambah');
    }

    public function nabar_edit($id)
    {
        $data = nabar::findOrFail($id);
        return view('relasi.nabar_edit', compact('data'));
    }
    public function insertnabar(request $request){

        $data = nabar::create([
            'nabarr' => $request->nabarr,

        ]);

        return redirect()->route('nabarr')->with('message','Data berhasil ditambahkan');

    }
    public function updatenabar(request $request, $id){
        $data = nabar::find($id);
        $data->update($request->all());

        return redirect()->route('nabarr')->with('success',' Data Berhasil Di Edit');
    }
    public function deletenabar($id){
        $data = nabar::find($id);
        $data->delete();

        return redirect()->route('nabarr')->with('success',' Data Berhasil Di Hapus');
}

}
