<?php

namespace App\Http\Controllers;

use App\Models\ruangan;
use Illuminate\Http\Request;

class RuanganController extends Controller
{

    public function ruangan()
    {
        return view('admin.coba.lab');
    }


}
