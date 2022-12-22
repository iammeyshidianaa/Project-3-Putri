<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login()
    {
        return view('pengguna.login');
    }
    public function loginproses(Request $request)
    {
        $this->validate($request,[
            'email' =>'required|exists:users,email',
            'password' => 'required',
        ],[
            'email.required' =>'Masukkan Email Anda',
            'email.exists' =>'Email Salah',
            'password.required' =>'Masukkan Kata Sandi Anda',

        ]);

        // dd('ak');
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password, 'level' => 'guru'])) {
            return redirect('/indexguru');
        }
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password, 'level' => 'siswa'])) {
            return redirect('/indexsiswa');
        }
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect('/indexadmin');
        }
        else{
            return redirect()->back()->with('password','password salah');
        }

    }




    public function select()
    {
        return view('pengguna.select');
    }

    public function register()
    {
        return view('pengguna.register');
    }

    public function simpanregister(Request $request)
    {
        $this->validate($request,[
            'name' =>'required|max:150',
            'email' =>'required|unique:users,email',
            'password' =>'required|min:5|max:50',
        ],[
            'name.required' =>'Nama harus diisi',
            'name.unique' =>' Nama sudah dipakai',
            'email.unique' =>'Email sudah dipakai',
            'email.required' =>'Email harus diisi',
            'password.required' =>'Sandi harus diisi',
        ]);

        $data = User::Create([
            'email' => $request->email,
            'name' => $request->name,
            'password' => bcrypt($request->password),
            'level' => 'guru',
            'remember_token' => Str::random(60),
        ]);

        DB::table('profile_guru')->insert([
            'namalengkap1' => $data->name,
            'foto1' => 'img/usr.jpeg'
        ]);
        return redirect('/masuk');
    }

    public function registersiswa()
    {
        return view('pengguna.registersiswa');
    }

    public function simpansiswa(Request $request)
    {
        $this->validate($request,[
            'name' =>'required|max:150',
            'email' =>'required|unique:users,email',
            'password' =>'required|min:8|max:50',
        ],[
            'name.required' =>'Nama harus diisi',
            'name.unique' =>' Nama sudah dipakai',
            'email.unique' =>'Email sudah dipakai',
            'email.required' =>'Email harus diisi',
            'password.required' =>'Sandi harus diisi',
            // 'password.min' =>'Sandi minimal 8 karakter',
            // 'password.max' =>'Sandi maksimal 50 karakter',
        ]);

        $data = User::Create([
            'email' => $request->email,
            'name' => $request->name,
            'password' => bcrypt($request->password),
            'level' => 'siswa',
            'remember_token' => Str::random(60),
        ]);

        DB::table('profile')->insert([
            'namalengkap' => $data->name,
            'foto' => 'img/usr.jpeg'
        ]);
        return redirect('/masuk');
    }

    public function user()
    {
        return redirect('admin.loguser.user');
    }


    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}
