<?php

namespace App\Http\Controllers;

use App\Models\ciudadano;
use App\Http\Requests\StoreciudadanoRequest;
use App\Http\Requests\UpdateciudadanoRequest;

class CiudadanoController extends Controller
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
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreciudadanoRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreciudadanoRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ciudadano  $ciudadano
     * @return \Illuminate\Http\Response
     */
    public function show(ciudadano $ciudadano)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ciudadano  $ciudadano
     * @return \Illuminate\Http\Response
     */
    public function edit(ciudadano $ciudadano)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateciudadanoRequest  $request
     * @param  \App\Models\ciudadano  $ciudadano
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateciudadanoRequest $request, ciudadano $ciudadano)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ciudadano  $ciudadano
     * @return \Illuminate\Http\Response
     */
    public function destroy(ciudadano $ciudadano)
    {
        //
    }
}
