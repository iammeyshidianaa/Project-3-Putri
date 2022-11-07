<?php

namespace App\Http\Controllers;

use App\Models\ruang;
use Illuminate\Http\Request;

class RuangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function ruang(Request $request)

    {
        $ruang = ruang::all();
    return view('admin.ruangan.ruang', compact('ruang'));

    }

    public function detailruangan(Request $request)

    {
        $ruang = ruang::all();
        $ruangan = ruang::all();
    return view('admin.ruangan.detailruangan', compact('ruangan','ruang'));

    }

    public function ruangan()
    {
        $ruang = ruang::all();

        return view('admin.ruangan.ruangan', compact('ruang'));

    }

    public function detail($id)
    {
        $ruang = ruang::where('ruang_id','=',$id)->get();

        return view('admin.ruangan.ruangan', compact('ruang'));

    }


    public function tambahruang()
    {
        $ruang = ruang::all();
        return view('admin.ruangan.tambahruangan', compact('ruang'));
    }

    public function insertruang(Request $request)
    {
        $pesan = [
            'required' => ':attribute wajib di isi!',
            'min' => ':attribute harus diisi minimal : min karakter',
            'max' => ':attribute harus diisi maksimal : max karakter',
            'numeric' => 'harus di isi angka!',


        ];
        $this->validate($request, [
            'gambar' => 'required',
            'ruang' => 'required|min:3|max:50',
            'jurusan' => 'required|min:3|max:50',
            'deskripsi' => 'required|min:3|max:50',

        ], $pesan);

        if ($request->hasFile('gambar')) {
            $request->file('gambar')->move('gambar/', $request->file('gambar')->getClientOriginalName());
            $data = ruang::create([
                'gambar' => $request->file('gambar')->getClientOriginalName(),
                'ruang' => $request->ruang,
                'jurusan' => $request->jurusan,
                'deskripsi' => $request->deskripsi,
            ]);
            $data->gambar = $request->file('gambar')->getClientOriginalName();
            $data->save();
        }

        return redirect()->route('ruangan')->with('message','Data berhasil ditambahkan');

    }

    public function tampilkanruang($id)
    {

        $ruang = ruang::findOrFail($id);
        $ruang = ruang::find($id);

        return view('admin.ruangan.tampilruang', compact('ruang'));
    }

    public function updateruang(Request $request, $id)
    {
        $pesan = [
            'required' => ':attribute wajib di isi!',
            'min' => ':attribute harus diisi minimal : min karakter',
            'max' => ':attribute harus diisi maksimal : max karakter',
            'numeric' => 'harus di isi angka!',


        ];
        $this->validate($request, [
            'gambar' => 'required',
            'ruang' => 'required|min:3|max:50',
            'jurusan' => 'required|min:2|max:50',
            'deskripsi' => 'required|min:3|max:50',
        ], $pesan);

        $ruang = ruang::findOrFail($id);
        $ruang = ruang::find($id);

        $ruang->update([
            'gambar' => $request->gambar,
            'ruang' => $request->ruang,
            'jurusan' => $request->jurusan,
            'deskripsi' => $request->deskripsi,

        ]);

        return redirect()->route('ruangan')->with('message', 'Data berhasil di edit');
    }

    public function delete($id)
    {
        $ruang = ruang::find($id);
        $ruang->delete($id);
        return redirect()->route('ruangan')->with('message', 'Data berhasil di hapus');
    }
}

