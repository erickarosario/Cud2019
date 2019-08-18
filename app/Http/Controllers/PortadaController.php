<?php

namespace App\Http\Controllers;

use App\Portada;
use Illuminate\Http\Request;

class PortadaController extends Controller
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
        return view('portada.create');
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
     * @param  \App\Portada  $portada
     * @return \Illuminate\Http\Response
     */
    public function show(Portada $portada)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Portada  $portada
     * @return \Illuminate\Http\Response
     */
    public function edit(Portada $portada)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Portada  $portada
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Portada $portada)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Portada  $portada
     * @return \Illuminate\Http\Response
     */
    public function destroy(Portada $portada)
    {
        //
    }
}
