<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PengajuanController extends Controller
{
    public function pengajuan() {
        return view('admin.pengajuan.pengajuan');
    }
}
