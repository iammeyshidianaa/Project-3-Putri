<?php

namespace App\Http\Controllers;

use Hash;
use App\Models\User;
use App\Models\pengajuan;
use App\Models\Barangdipinjam;
use App\Models\databarang;
use App\Models\pinjamguru;
use App\Models\ruang;
use App\Models\Baranghabis;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Models\peminjamanadmin;
use App\Models\barangmasukadmin;
use App\Http\Controllers\Controller;
use App\Models\show_change_password_form;
use Illuminate\Support\Facades\{DB, Auth};
// use Auth;

class IndexController extends Controller
{
        public function showChangePasswordGetg() {
            return view('guru.kata.change-passwordguru');
        }

        public function changePasswordPostg(Request $request) {
            if (!(Hash::check($request->get('current-password'), Auth::user()->password))) {
                // The passwords matches
                return redirect()->back()->with("error","Kata sandi Anda saat ini tidak cocok dengan kata sandi.");
            }

            if(strcmp($request->get('current-password'), $request->get('new-password')) == 0){
                // Current password and new password same
                return redirect()->back()->with("error","Kata Sandi Baru tidak boleh sama dengan kata sandi Anda saat ini.");
            }

            $validatedData = $request->validate([
                'current-password' => 'required',
                'new-password' => 'required|string|min:8|confirmed',
            ]);

            //Change Password
            $user = Auth::user();
            $user->password = bcrypt($request->get('new-password'));
            $user->save();

            return redirect()->back()->with("success","Password Berhasil Diubah!");
        }

    public function indexadmin()
    {
        $Jumlah_pengguna = User::count();
        $permintaan_pengajuan = pengajuan::count();
        $permintaan_pinjam_siswa = peminjamanadmin::count();
        $permintaan_pengembalian_guru = pinjamguru::count();
        $denda = barangmasukadmin::select(DB::raw(" created_at, SUM(stok) as stok"))
        ->whereYear('created_at', date('Y'))
        ->groupBy(DB::raw("MONTH(created_at)"))
        ->get();
        // $denda = Denda::query()
        //     ->selectRaw("SUM(denda) denda")
        //     ->groupBy(DB::raw('MONTH(created_at)'))
        //     ->get();
    // dd($denda);

    $previousMonths = [];

    $currentDate = now()->startOfMonth();
    while ($currentDate->year == Carbon::now()->year) {
        $previousMonths[] = $currentDate->format('M,Y');
        $currentDate->subMonth();
    }

    $previousMonths = array_reverse($previousMonths);
    // dd($previousMonths);

    $array_pengeluaran = array();
    foreach($previousMonths as $key => $val){
        $array_pengeluaran[$key] = 0;
        foreach ($denda as $mp) {
            $waktu = Carbon::parse($mp->created_at)->format('M,Y');

            if($val == $waktu){
                $array_pengeluaran[$key] = (int) $mp->stok;
            }
        }
    }
    // dd($array_pengeluaran);
    $harga = barangmasukadmin::select(
                        DB::raw("(sum(stok)) as stok"),
                        DB::raw("(DATE_FORMAT(created_at, '%M')) as month"),
                        DB::raw("(DATE_FORMAT(created_at, '%Y')) as year")
                        )
                        ->orderBy('created_at')
                        ->groupBy(DB::raw("DATE_FORMAT(created_at, '%M')"))
                        ->groupBy(DB::raw("DATE_FORMAT(created_at, '%Y')"))
                        ->get();

        return view('admin.index',compact('permintaan_pengajuan','Jumlah_pengguna','permintaan_pinjam_siswa','permintaan_pengembalian_guru','harga','array_pengeluaran','previousMonths'));
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
        $profile = DB::table('profile')->where('namalengkap', Auth::user()->name)->first();
        return view('siswa.profile.profil')->with(compact('profile'));
    }


    public function editprofile()
    {
        return view('siswa.profile.edit');
    }

    public function insert(Request $request){
   //$data = Employee::create($request->all());
   $data =  DB::table('profile');
   $data->update(['namalengkap' => $request->namalengkap]);
   DB::table('users')->where('id', Auth::user()->id)->update(['name' => $request->namalengkap]);
   if($request->hasFile('foto')) {
       $request->file('foto')->move(public_path('img/'), $request->file('foto')->getClientOriginalName());
       $data->update([
           'foto' => 'img/'.$request->file('foto')->getClientOriginalName(),
       ]);
    }
    return redirect()->route('profile')->with('success','Data Berhasil Di Tambahkan');
}

    //ubah profile guru


    public function profileguru()
    {
        $profileguru = DB::table('profile_guru')->where('namalengkap1', Auth::user()->name)->first();
        return view('guru.profil.profileguru')->with(compact('profileguru'));
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
   $data->update(['namalengkap1' => $request->namalengkap1]);
   DB::table('users')->where('id', Auth::user()->id)->update(['name' => $request->namalengkap1]);
   if($request->hasFile('foto1')) {
    $request->file('foto1')->move(public_path('img/'), $request->file('foto1')->getClientOriginalName());
    $data->update([
        'foto1' => 'img/'.$request->file('foto1')->getClientOriginalName(),
    ]);
     }
       return redirect()->route('profileguru')->with('success','Data Berhasil Di Tambahkan');
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
    $data->update([
        'namalengkap2' => $request->namalengkap2,
        'foto2' => $request->file('foto2')->getClientOriginalName(),
    ]);
    return redirect()->route('profileadmin')->with('success','Data Berhasil Di Tambahkan');
    }
    }

    // public function grafik()
    // {
    //     $stok = databarang::select(DB::raw("CAST(SUM(jumlah_stok) as int) as stok"))
    //     ->GroupBy(DB::raw("Month(created_at)"))
    //     ->pluck('stok');

    //     // dd($stok);

    //     $bulan = databarang::select(DB::raw("MONTHNAME(created_at) as bulan"))
    //     ->GroupBy(DB::raw("MONTHNAME(created_at)"))
    //     ->pluck('bulan');

    //     // dd($bulan);

    //     return view('admin.grafik', compact('stok','bulan'));

    // }

    // public function grafik(){

        // $denda = barangmasukadmin::select(DB::raw(" created_at, SUM(stok) as stok"))
        //     ->whereYear('created_at', date('Y'))
        //     ->groupBy(DB::raw("MONTH(created_at)"))
        //     ->get();
        //     // $denda = Denda::query()
        //     //     ->selectRaw("SUM(denda) denda")
        //     //     ->groupBy(DB::raw('MONTH(created_at)'))
        //     //     ->get();
        // // dd($denda);

    //     $previousMonths = [];

    //     $currentDate = now()->startOfMonth();
    //     while ($currentDate->year == Carbon::now()->year) {
    //         $previousMonths[] = $currentDate->format('M,Y');
    //         $currentDate->subMonth();
    //     }

    //     $previousMonths = array_reverse($previousMonths);
    //     // dd($previousMonths);

    //     $array_pengeluaran = array();
    //     foreach($previousMonths as $key => $val){
    //         $array_pengeluaran[$key] = 0;
    //         foreach ($denda as $mp) {
    //             $waktu = Carbon::parse($mp->created_at)->format('M,Y');

    //             if($val == $waktu){
    //                 $array_pengeluaran[$key] = (int) $mp->stok;
    //             }
    //         }
    //     }
    //     // dd($array_pengeluaran);
    //     $harga = barangmasukadmin::select(
    //                         DB::raw("(sum(stok)) as stok"),
    //                         DB::raw("(DATE_FORMAT(created_at, '%M')) as month"),
    //                         DB::raw("(DATE_FORMAT(created_at, '%Y')) as year")
    //                         )
    //                         ->orderBy('created_at')
    //                         ->groupBy(DB::raw("DATE_FORMAT(created_at, '%M')"))
    //                         ->groupBy(DB::raw("DATE_FORMAT(created_at, '%Y')"))
    //                         ->get();


    //     return view('admin.index',compact('harga','array_pengeluaran','previousMonths'));
    // }
};



