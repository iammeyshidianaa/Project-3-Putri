<?php

namespace App\Http\Controllers;

use App\Models\pengembalianadmin;
use Illuminate\Http\Request;

class PengembalianadminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function pengembalianadmin()
    {
        $pengembalian = pengembalianadmin::all();

        return view('admin.permintaan_pengembalian.pengembalian', compact('pengembalian'));
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
     * @param  \App\Models\pengembalianadmin  $pengembalianadmin
     * @return \Illuminate\Http\Response
     */
    public function show(pengembalianadmin $pengembalianadmin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\pengembalianadmin  $pengembalianadmin
     * @return \Illuminate\Http\Response
     */
    public function edit(pengembalianadmin $pengembalianadmin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\pengembalianadmin  $pengembalianadmin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, pengembalianadmin $pengembalianadmin)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\pengembalianadmin  $pengembalianadmin
     * @return \Illuminate\Http\Response
     */
    public function destroy(pengembalianadmin $pengembalianadmin)
    {
        //
    }
}
