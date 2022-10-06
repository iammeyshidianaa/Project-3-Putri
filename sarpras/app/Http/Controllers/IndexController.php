<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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

    //siswa//

    public function editprofile()
    {
        return view ('siswa.profile.edit_profile');
    }

    //guru//

    public function editprofileguru()
    {
        return view ('guru.editprofile.edit');
    }
}
