<?php

namespace App\Http\Controllers;

use App\Models\masukadmin;
use Illuminate\Http\Request;

class MasukadminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function masukadmin()
    {
        $masukadmin = masukadmin::all();

        return view('admin.barangmasuk.habis', compact('masukadmin'));
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
     * @param  \App\Models\masukadmin  $masukadmin
     * @return \Illuminate\Http\Response
     */
    public function show(masukadmin $masukadmin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\masukadmin  $masukadmin
     * @return \Illuminate\Http\Response
     */
    public function edit(masukadmin $masukadmin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\masukadmin  $masukadmin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, masukadmin $masukadmin)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\masukadmin  $masukadmin
     * @return \Illuminate\Http\Response
     */
    public function destroy(masukadmin $masukadmin)
    {
        //
    }
}
