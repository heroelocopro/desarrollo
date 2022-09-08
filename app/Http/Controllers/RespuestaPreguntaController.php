<?php

namespace App\Http\Controllers;

use App\Models\respuesta_pregunta;
use App\Http\Requests\Storerespuesta_preguntaRequest;
use App\Http\Requests\Updaterespuesta_preguntaRequest;

class RespuestaPreguntaController extends Controller
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
     * @param  \App\Http\Requests\Storerespuesta_preguntaRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Storerespuesta_preguntaRequest $request)
    {
        //
        $respuesta_pregunta = new respuesta_pregunta;
        $respuesta_pregunta->idPregunta = $request->preguntas_idpreguntas;
        $respuesta_pregunta->respuesta = $request->respuesta;
        $respuesta_pregunta->save();

        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\respuesta_pregunta  $respuesta_pregunta
     * @return \Illuminate\Http\Response
     */
    public function show(respuesta_pregunta $respuesta_pregunta)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\respuesta_pregunta  $respuesta_pregunta
     * @return \Illuminate\Http\Response
     */
    public function edit(respuesta_pregunta $respuesta_pregunta)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Updaterespuesta_preguntaRequest  $request
     * @param  \App\Models\respuesta_pregunta  $respuesta_pregunta
     * @return \Illuminate\Http\Response
     */
    public function update(Updaterespuesta_preguntaRequest $request, respuesta_pregunta $respuesta_pregunta)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\respuesta_pregunta  $respuesta_pregunta
     * @return \Illuminate\Http\Response
     */
    public function destroy(respuesta_pregunta $respuesta_pregunta)
    {
        //
    }
}
