<?php

#app\Http\Controllers\guruController.php

namespace App\Http\Controllers;
use App\Models\show_change_password_form;
use Illuminate\Http\Request;
use App\Models\User;
use Hash;
use Auth;

class guruController extends Controller
{
    public function showChangePasswordGeta() {
        return view('admin.kata.change-passwordAdmin');
    }

    public function changePasswordPosta(Request $request) {
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
}





