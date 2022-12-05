<?php

namespace App\Http\Controllers;

use App\Models\{Baranghabis, User};
use Illuminate\Http\Request;
use Hash;
use Auth;

class userController extends Controller
{
    public function user() {
        $data = User::all();

        return view('admin.loguser.user')->with(compact('data'));
    }
    public function deleteuser($id)
    {
        $data = User::find($id);
        $data->delete($id);
        return redirect()->route('user')->with('message', 'Data berhasil di hapus');
    }




}
