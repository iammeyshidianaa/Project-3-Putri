<?php

namespace App\Http\Controllers;

use App\Models\ruang;
use App\Models\databarang;
use App\Models\Baranghabis;
use App\Models\barangmasuk;
use Illuminate\Http\Request;

class barangmasukController extends Controller
{
    public function masukadmin()
    {
        $masukadmin = barangmasuk::with('ruang')->get();

        return view('admin.barangmasuk.habis', compact('masukadmin'));
    }

    public function tambah_stok()
    {
        $baranghabis =  Baranghabis::with('ruang')->get();

        return view('admin.barangmasuk.tambah_habis', compact('baranghabis'));
    }

    public function insert_stok_baranghabis(Request $request)
    {

        $pesan = [
            'required' => ':attribute wajib di isi!',
            'min' => ':attribute harus diisi minimal :3 min karakter',
            'max' => ':attribute harus diisi maksimal :12 max karakter',
            'numeric' => 'harus di isi angka!',

        ];
        $this->validate($request, [
            'nama' => 'required',
            'tanggal_pembelian' => 'required',
            'stok' => 'numeric',

        ], $pesan);

$new = barangmasuk::where('nama', '=', $request->nama)->First();

//  dd($baru);
if(is_null($new)) {
    $datas = barangmasuk::create($request->all());
    $newnew = Baranghabis::where('nama_barang1', '=', $request->nama)->First();
    $stok1 = $newnew->stok1;
    $stokup = $stok1 + $request->stok;
    $newnew->update(['stok1' => $stokup]);

} else {
    $neww = Baranghabis::where('nama_barang1', '=', $request->nama)->First();
    $stoksekarang = $new->stok;
    $stok1 = $neww->stok1;
    $stokupdate = $stoksekarang + $request->stok;
    $stokup = $stok1 + $request->stok;
    $new->update(['stok' => $stokupdate]);
    $neww->update(['stok1' => $stokup]);
}

        return redirect()->route('masukadmin')->with('message','Stok berhasil ditambahkan');

    }

    public function deletestok_baranghabis($id)
    {
        $data = barangmasuk::find($id);
        $data->delete($id);
        return redirect()->route('masukadmin')->with('message', 'Data berhasil di hapus');
    }
}
