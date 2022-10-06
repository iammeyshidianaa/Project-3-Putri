<?php

namespace App\Http\Controllers;

use App\Models\BarangPinjamGuru;
use Illuminate\Http\Request;

class BarangPinjamGuruController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function barangpinjamguru()
    {
        $pinjam = BarangPinjamGuru::all();

        return view('guru.barangpinjam.barangpinjam', compact('pinjam'));
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
     * @param  \App\Models\BarangPinjamGuru  $barangPinjamGuru
     * @return \Illuminate\Http\Response
     */
    public function show(BarangPinjamGuru $barangPinjamGuru)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\BarangPinjamGuru  $barangPinjamGuru
     * @return \Illuminate\Http\Response
     */
    public function edit(BarangPinjamGuru $barangPinjamGuru)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\BarangPinjamGuru  $barangPinjamGuru
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, BarangPinjamGuru $barangPinjamGuru)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\BarangPinjamGuru  $barangPinjamGuru
     * @return \Illuminate\Http\Response
     */
    public function destroy(BarangPinjamGuru $barangPinjamGuru)
    {
        //
    }
}
