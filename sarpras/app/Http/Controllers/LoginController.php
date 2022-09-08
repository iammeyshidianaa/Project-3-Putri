<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\User;
// use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login (Request $request){
        return view('pengguna.login');
     }

     public function postlogin (Request $request){
        if(Auth::attempt($request->only('email','password'))){
            if(Auth::user()->level == 'admin'){
                return redirect('/index');
            }else{
                return redirect('/index');
            }
        }
        return redirect('/login')->with('salah','Email Atau Password Salah');
     }

     public function registrasi(){
        return view('pengguna.login');
    }
    public function simpanregistrasi(Request $request){
        // dd($request->all());
    User::Create([
        'fullname' => $request->fullname,
        'email' => $request->email,
        'password' => bcrypt($request->password),
        'cpassword' => $request->cpassword,
        'remember_token' => Str::random(60),
    ]);
    return redirect('/login');
        }
        public function forgotpassword(){
            return view('pengguna.forgotpassword');
        }
        public function resetpassword(){
            return view('pengguna.resetpassword');
        }
        public function simpanreset(Request $request){
            dd($request->all());
        User::Create([
            'password' => bcrypt($request->password),
        ]);

    return redirect('/login');
        }

        public function logout(request $Request)
        {
            // dd($request->all());
            Auth::logout();
            return redirect('/login');
        }


    }
