<?php

namespace App\Http\Controllers;

use App\Nuevoadmi;
use Illuminate\Http\Request;

class NuevoadmiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('nuevoadmin.create');
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
     * @param  \App\Nuevoadmi  $nuevoadmi
     * @return \Illuminate\Http\Response
     */
    public function show(Nuevoadmi $nuevoadmi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Nuevoadmi  $nuevoadmi
     * @return \Illuminate\Http\Response
     */
    public function edit(Nuevoadmi $nuevoadmi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Nuevoadmi  $nuevoadmi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Nuevoadmi $nuevoadmi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Nuevoadmi  $nuevoadmi
     * @return \Illuminate\Http\Response
     */
    public function destroy(Nuevoadmi $nuevoadmi)
    {
        //
    }
}
