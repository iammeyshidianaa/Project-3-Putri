<?php

namespace App\Http\Controllers;

use App\Models\Barangdipinjam;
use Illuminate\Http\Request;

class BarangdipinjamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function barangdipinjam()
    {
        $barangdipinjam = Barangdipinjam::all();
        return view('siswa.barang_dipinjam.barangdipinjam', compact('barangdipinjam'));
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
     * @param  \App\Models\Barangdipinjam  $barangdipinjam
     * @return \Illuminate\Http\Response
     */
    public function show(Barangdipinjam $barangdipinjam)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Barangdipinjam  $barangdipinjam
     * @return \Illuminate\Http\Response
     */
    public function edit(Barangdipinjam $barangdipinjam)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Barangdipinjam  $barangdipinjam
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Barangdipinjam $barangdipinjam)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Barangdipinjam  $barangdipinjam
     * @return \Illuminate\Http\Response
     */
    public function destroy(Barangdipinjam $barangdipinjam)
    {
        //
    }
}
