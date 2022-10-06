<?php

namespace App\Http\Controllers;

use App\Models\barangmasukadmin;
use Illuminate\Http\Request;

class BarangmasukadminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function barangmasukadmin()
    {
        $barangmasukadmin =  barangmasukadmin::all();

        return view('admin.barangmasuk.tidakhabis', compact('barangmasukadmin'));
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
     * @param  \App\Models\barangmasukadmin  $barangmasukadmin
     * @return \Illuminate\Http\Response
     */
    public function show(barangmasukadmin $barangmasukadmin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\barangmasukadmin  $barangmasukadmin
     * @return \Illuminate\Http\Response
     */
    public function edit(barangmasukadmin $barangmasukadmin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\barangmasukadmin  $barangmasukadmin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, barangmasukadmin $barangmasukadmin)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\barangmasukadmin  $barangmasukadmin
     * @return \Illuminate\Http\Response
     */
    public function destroy(barangmasukadmin $barangmasukadmin)
    {
        //
    }
}
