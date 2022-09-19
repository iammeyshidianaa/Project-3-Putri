<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function indexadmin()
    {
        return view('index.admin');
    }

    public function indexguru()
    {
        return view('index.guru');
    }

    public function indexsiswa()
    {
        return view('index.siswa');
    }
}
