<?php

namespace App\Http\Controllers;

use App\Models\dikembalikan;
use Illuminate\Http\Request;

class DikembalikanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function dikembalikan()
    {
        $dikembalikan = dikembalikan::all();

        return view('admin.daftar_riwayat.dikembalikan', compact('dikembalikan'));
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
     * @param  \App\Models\dikembalikan  $dikembalikan
     * @return \Illuminate\Http\Response
     */
    public function show(dikembalikan $dikembalikan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\dikembalikan  $dikembalikan
     * @return \Illuminate\Http\Response
     */
    public function edit(dikembalikan $dikembalikan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\dikembalikan  $dikembalikan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, dikembalikan $dikembalikan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\dikembalikan  $dikembalikan
     * @return \Illuminate\Http\Response
     */
    public function destroy(dikembalikan $dikembalikan)
    {
        //
    }
}
