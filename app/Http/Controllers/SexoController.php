<?php

namespace App\Http\Controllers;

use App\Models\sexo;
use App\Http\Requests\StoresexoRequest;
use App\Http\Requests\UpdatesexoRequest;

class SexoController extends Controller
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
     * @param  \App\Http\Requests\StoresexoRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoresexoRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\sexo  $sexo
     * @return \Illuminate\Http\Response
     */
    public function show(sexo $sexo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\sexo  $sexo
     * @return \Illuminate\Http\Response
     */
    public function edit(sexo $sexo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatesexoRequest  $request
     * @param  \App\Models\sexo  $sexo
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatesexoRequest $request, sexo $sexo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\sexo  $sexo
     * @return \Illuminate\Http\Response
     */
    public function destroy(sexo $sexo)
    {
        //
    }
}
