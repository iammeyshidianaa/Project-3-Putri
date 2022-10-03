<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login (){
        return view('pengguna.login');
     }
    public function loginproses (Request $request){
        if(Auth::attempt(['email'=>$request->email,'password'=>$request->password,'level'=>'siswa'])) {
            return redirect('/indexsiswa');
        }
        if(Auth::attempt(['email'=>$request->email,'password'=>$request->password,'level'=>'guru'])) {
            return redirect('/indexguru');
        }
        if(Auth::attempt(['email'=>$request->email,'password'=>$request->password])) {
            return redirect('/indexadmin');
        }



        return redirect('/masuk')->with('salah','Nama Atau Password Salah');
     }




    public function select(){
        return view('pengguna.select');
     }

    public function register(){
        return view('pengguna.register');
    }

    public function registersiswa(){
        return view('pengguna.registersiswa');
    }

    public function simpansiswa(Request $request){
        $data=User::Create([
        'email' => $request->email,
        'name' => $request->name,
        'password' => bcrypt($request->password),
        'level' => 'siswa',
        'remember_token' => Str::random(60),
    ]);
    return redirect('/masuk');
    }

    public function simpanregister(Request $request){
        $data=User::Create([
        'email' => $request->email,
        'name' => $request->name,
        'password' => bcrypt($request->password),
        'level' => 'guru',
        'remember_token' => Str::random(60),
    ]);

    // dd($data);
    return redirect('/masuk');
        }

    public function user(){
        return redirect('admin.loguser.user');
    }


    public function logout(){
        Auth::logout();
        return redirect('/');
    }

    }
