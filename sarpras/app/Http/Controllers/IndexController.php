<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    public function indexadmin()
    {
        return view('admin.index');
    }

    public function indexguru()
    {
        return view('guru.index');
    }

    public function indexsiswa()
    {
        return view('siswa.index');
    }

    //ubah Profile Siswa

    public function profile()
    {
        return view('siswa.profile.profil');
    }


    public function editprofile()
    {
        return view('siswa.profile.edit');
    }

    // public function tambahdata(){
    //     return view('tambahsiswa');
    // }

    public function insert(Request $request){
   //$data = Employee::create($request->all());
   $data =  DB::table('profile');
   if($request->hasFile('foto')) {
       $request->file('foto')->move('img/siswa/', $request->file('foto')->getClientOriginalName());
       $data->insert([
           'namalengkap' => $request->namalengkap,
           'foto' => $request->file('foto')->getClientOriginalName(),
       ]);
       return redirect()->route('profile')->with('success','Data Berhasil Di Tambahkan');
    }
}

    //ubah profile guru


    public function profileguru()
    {
        return view('guru.profil.profileguru');
    }


    public function editprofileguru()
    {
        return view('guru.profil.editprofil');
    }

    // public function tambahdata(){
    //     return view('tambahsiswa');
    // }

    public function insertguru(Request $request){
   //$data = Employee::create($request->all());
   $data =  DB::table('profile_guru');
   if($request->hasFile('foto1')) {
       $request->file('foto1')->move('img/guru/', $request->file('foto1')->getClientOriginalName());
       $data->insert([
           'namalengkap1' => $request->namalengkap1,
           'foto1' => $request->file('foto1')->getClientOriginalName(),
       ]);
       return redirect()->route('profileguru')->with('success','Data Berhasil Di Tambahkan');
   }

}

    //ubah Profile Siswa

    public function profileadmin()
    {
        return view('admin.profile.profileadmin');
    }


    public function editprofileadmin()
    {
        return view('admin.profile.edit');
    }

    // public function tambahdata(){
    //     return view('tambahsiswa');
    // }

    public function insertadmin(Request $request){
    //$data = Employee::create($request->all());
    $data =  DB::table('profile_admin');
    if($request->hasFile('foto2')) {
    $request->file('foto2')->move('img/admin/', $request->file('foto2')->getClientOriginalName());
    $data->insert([
        'namalengkap2' => $request->namalengkap2,
        'foto2' => $request->file('foto2')->getClientOriginalName(),
    ]);
    return redirect()->route('profileadmim')->with('success','Data Berhasil Di Tambahkan');
    }
    }};



