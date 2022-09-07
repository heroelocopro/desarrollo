<?php

namespace App\Http\Controllers;

use App\Models\grupo_pregunta;
use App\Http\Requests\Storegrupo_preguntaRequest;
use App\Http\Requests\Updategrupo_preguntaRequest;

class GrupoPreguntaController extends Controller
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
     * @param  \App\Http\Requests\Storegrupo_preguntaRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Storegrupo_preguntaRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\grupo_pregunta  $grupo_pregunta
     * @return \Illuminate\Http\Response
     */
    public function show(grupo_pregunta $grupo_pregunta)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\grupo_pregunta  $grupo_pregunta
     * @return \Illuminate\Http\Response
     */
    public function edit(grupo_pregunta $grupo_pregunta)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Updategrupo_preguntaRequest  $request
     * @param  \App\Models\grupo_pregunta  $grupo_pregunta
     * @return \Illuminate\Http\Response
     */
    public function update(Updategrupo_preguntaRequest $request, grupo_pregunta $grupo_pregunta)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\grupo_pregunta  $grupo_pregunta
     * @return \Illuminate\Http\Response
     */
    public function destroy(grupo_pregunta $grupo_pregunta)
    {
        //
    }
}
