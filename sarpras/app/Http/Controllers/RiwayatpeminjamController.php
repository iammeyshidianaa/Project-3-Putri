<?php

namespace App\Http\Controllers;

use App\Models\Riwayatpeminjam;
use Illuminate\Http\Request;

class RiwayatpeminjamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function riwayatpeminjaman()
    {
        $riwayatpeminjam = Riwayatpeminjam::all();

        return view('siswa.riwayat.riwayat_peminjam', compact('riwayatpeminjam'));
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
     * @param  \App\Models\Riwayatpeminjam  $riwayatpeminjam
     * @return \Illuminate\Http\Response
     */
    public function show(Riwayatpeminjam $riwayatpeminjam)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Riwayatpeminjam  $riwayatpeminjam
     * @return \Illuminate\Http\Response
     */
    public function edit(Riwayatpeminjam $riwayatpeminjam)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Riwayatpeminjam  $riwayatpeminjam
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Riwayatpeminjam $riwayatpeminjam)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Riwayatpeminjam  $riwayatpeminjam
     * @return \Illuminate\Http\Response
     */
    public function destroy(Riwayatpeminjam $riwayatpeminjam)
    {
        //
    }
}
