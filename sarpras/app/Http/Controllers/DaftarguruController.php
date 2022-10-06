<?php

namespace App\Http\Controllers;

use App\Models\daftarguru;
use Illuminate\Http\Request;

class DaftarguruController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function daftarguru()
    {
        $pinjam = Daftarguru::all();

        return view('admin.pengajuan.pengajuanguru', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\daftarguru  $daftarguru
     * @return \Illuminate\Http\Response
     */
    public function show(daftarguru $daftarguru)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\daftarguru  $daftarguru
     * @return \Illuminate\Http\Response
     */
    public function edit(daftarguru $daftarguru)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\daftarguru  $daftarguru
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, daftarguru $daftarguru)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\daftarguru  $daftarguru
     * @return \Illuminate\Http\Response
     */
    public function destroy(daftarguru $daftarguru)
    {
        //
    }
}
