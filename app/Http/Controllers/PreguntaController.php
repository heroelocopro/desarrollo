<?php

namespace App\Http\Controllers;

use App\Models\pregunta;
use App\Http\Requests\StorepreguntaRequest;
use App\Http\Requests\UpdatepreguntaRequest;

class PreguntaController extends Controller
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
     * @param  \App\Http\Requests\StorepreguntaRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorepreguntaRequest $request)
    {
        //
        

        $pregunta = new pregunta;
        $pregunta->grupopreguntas_id = $request->grupopreguntas_id;
        $pregunta->nombre_pregunta = $request->nombre_pregunta;
        
        $pregunta->save();

        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\pregunta  $pregunta
     * @return \Illuminate\Http\Response
     */
    public function show(pregunta $pregunta)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\pregunta  $pregunta
     * @return \Illuminate\Http\Response
     */
    public function edit(pregunta $pregunta)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatepreguntaRequest  $request
     * @param  \App\Models\pregunta  $pregunta
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatepreguntaRequest $request, pregunta $pregunta)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\pregunta  $pregunta
     * @return \Illuminate\Http\Response
     */
    public function destroy(pregunta $pregunta)
    {
        //
    }
}
