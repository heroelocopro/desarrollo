<?php

namespace App\Http\Controllers;

use App\Models\sondeo;
use App\Http\Requests\StoresondeoRequest;
use App\Http\Requests\UpdatesondeoRequest;
use App\Models\ciudadano;
use App\Models\filtro;
use App\Models\grupo_pregunta;
use App\Models\opcion;
use App\Models\pregunta;
use App\Models\respuesta_pregunta;
use Illuminate\Support\Facades\DB;

class SondeoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $grupospreguntas = grupo_pregunta::all();
        $preguntas = pregunta::all();
        $filtros = filtro::all();
        $opciones = opcion::all();
        $respuestas = respuesta_pregunta::all();
        return view('sondeos.index',['preguntas' => $preguntas , 'opciones' => $opciones,'filtros' => $filtros, 'grupospreguntas' => $grupospreguntas,'respuestas' => $respuestas]);
        
    }


    public function cargarSondeos(){
        $grupospreguntas = grupo_pregunta::all();
        $preguntas = DB::select('select preguntas.id,  preguntas.nombre_pregunta, grupo_preguntas.id as grupoid from preguntas
        inner join grupo_preguntas on preguntas.grupopreguntas_id = grupo_preguntas.id;');
        $respuestas = respuesta_pregunta::all();

        $sondeos = DB::select('select * from sondeos where fecha_cierre > curdate() and fecha_inicio < curdate();');
        // $filtros = DB::select('select sondeos.tema , sondeos.filtro_idfiltro, sondeos.filtro_grupo_poblacional_idgrupo,
        // grupo_poblacionals.id, grupo_poblacionals.nom_grup_pob from sondeos
        // inner join grupo_poblacionals on sondeos.filtro_grupo_poblacional_idgrupo = grupo_poblacionals.id where grupo_poblacionals.nom_grup_pob = ciudadanos.etnia');
        #$ciudadanos = DB::select('select users.id,ciudadanos.* from users
        #inner join ciudadanos on users.id ='.auth()->user()->id );

        $opciones = opcion::all();

        $filtros2 = filtro::all();
        

        return view('sondeos.show',['sondeos' => $sondeos, 'filtros' => $filtros2,'preguntas' => $preguntas, 'respuestas' => $respuestas ,'grupopreguntas' => $grupospreguntas,'opciones' => $opciones]);
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
        if($request->hasFile('icono')){
            $image = $request->file('icono');
            $image->move('uploads', $image->getClientOriginalName());
            $sondeo->icono = $image->getClientOriginalName();
        }
        $sondeo->hora_cierre = $request->hora_cierre;
        $sondeo->fecha_pub = $request->fecha_pub;
        $sondeo->hora_pub = $request->hora_pub;
        $sondeo->administrador_idadministrador = 1;
        $sondeo->administrador_usuario_idusuario = 1;
        $sondeo->preguntas_idpreguntas = $request->grupopreguntasid;
        $sondeo->confirmacion_voto_idconfirmacion = $request->confirmacion_voto_idconfirmacion_voto;
        $sondeo->filtro_idfiltro = $request->filtro_idfiltro;
        $filtros = filtro::all();
        
        $idgrupofiltro = $filtros->find($request->filtro_idfiltro);
        $sondeo->filtro_grupo_poblacional_idgrupo =  $idgrupofiltro->grupo_poblacional_id ;
        $sondeo->condicion_idcondicion = 2;

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
