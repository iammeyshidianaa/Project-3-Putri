<?php

namespace App\Http\Controllers;

use App\Models\peminjamanadmin;
use Illuminate\Http\Request;

class PeminjamanadminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function peminjamanadmin()
    {
        $peminjaman = peminjamanadmin::all();

        return view('admin.permintaan_peminjaman.peminjaman', compact('peminjaman'));
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
     * @param  \App\Models\peminjamanadmin  $peminjamanadmin
     * @return \Illuminate\Http\Response
     */
    public function show(peminjamanadmin $peminjamanadmin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\peminjamanadmin  $peminjamanadmin
     * @return \Illuminate\Http\Response
     */
    public function edit(peminjamanadmin $peminjamanadmin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\peminjamanadmin  $peminjamanadmin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, peminjamanadmin $peminjamanadmin)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\peminjamanadmin  $peminjamanadmin
     * @return \Illuminate\Http\Response
     */
    public function destroy(peminjamanadmin $peminjamanadmin)
    {
        //
    }
}
