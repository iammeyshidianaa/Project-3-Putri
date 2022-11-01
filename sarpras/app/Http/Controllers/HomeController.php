<?php

#app\Http\Controllers\HomeController.php

namespace App\Http\Controllers;
use Auth;
use Hash;
use App\Models\User;
use App\Models\barangmasuk;
use Illuminate\Http\Request;
use App\Models\show_change_password_form;

class HomeController extends Controller
{
    public function showChangePasswordGet() {
        return view('siswa.kata.change-password');
    }

    public function changePasswordPost(Request $request) {
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

    // // Ajax Stok Opname
    // public function index()
    // {
    //     $model = new barangmasuk();
    //     $data = $model->findAll();

    //     return view('admin.barangmasuk.tambah_habis', [
    //         'barangmasuks'
    //     ]);
    // }

    // public function save()
    // {
    //     dd($this->request->getPost());
    // }
}




