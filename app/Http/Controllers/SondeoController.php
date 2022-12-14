<?php

namespace App\Http\Controllers;

use App\Models\sondeo;
use App\Http\Requests\StoresondeoRequest;
use App\Http\Requests\UpdatesondeoRequest;
use App\Models\filtro;
use App\Models\opcion;
use App\Models\pregunta;

class SondeoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $preguntas = pregunta::all();
        $filtros = filtro::all();
        $opciones = opcion::all();
        return view('sondeos.index',['preguntas' => $preguntas , 'opciones' => $opciones,'filtros' => $filtros]);
        
    }


    public function cargarSondeos(){
        $sondeos = sondeo::all();
        return view('sondeos.show',['sondeos' => $sondeos]);
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
     * @param  \App\Http\Requests\StoresondeoRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoresondeoRequest $request)
    {
        
        
        $sondeo = new sondeo;
        $sondeo->tema = $request->tema;
        $sondeo->fecha_inicio = $request->fecha_inicio;
        $sondeo->hora_inicio = $request->hora_inicio;
        $sondeo->tipo = $request->tipo;
        $sondeo->fecha_cierre = $request->fecha_cierre;
        $sondeo->icono = $request->icono;
        $sondeo->hora_cierre = $request->hora_cierre;
        $sondeo->fecha_pub = $request->fecha_pub;
        $sondeo->hora_pub = $request->hora_pub;
        $sondeo->administrador_idadministrador = 1;
        $sondeo->administrador_usuario_idusuario = 1;
        $sondeo->preguntas_idpreguntas = 1;
        $sondeo->confirmacion_voto_idconfirmacion = $request->confirmacion_voto_idconfirmacion_voto;
        $sondeo->filtro_idfiltro = $request->filtro_idfiltro;
        $filtros = filtro::all();
        
        $idgrupofiltro = $filtros->find($request->filtro_idfiltro);
        $sondeo->filtro_grupo_poblacional_idgrupo =  $idgrupofiltro->grupo_poblacional_id ;
        $sondeo->condicion_idcondicion = $request->confirmacion_voto_idconfirmacion_voto;

        $sondeo->save();

        return redirect()->route('sondeos')->with('status' , 'registro de sondeos exitoso');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\sondeo  $sondeo
     * @return \Illuminate\Http\Response
     */
    public function show(sondeo $sondeo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\sondeo  $sondeo
     * @return \Illuminate\Http\Response
     */
    public function edit(sondeo $sondeo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatesondeoRequest  $request
     * @param  \App\Models\sondeo  $sondeo
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatesondeoRequest $request, sondeo $sondeo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\sondeo  $sondeo
     * @return \Illuminate\Http\Response
     */
    public function destroy(sondeo $sondeo)
    {
        //
    }
}
