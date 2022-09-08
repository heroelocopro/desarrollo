<?php

namespace App\Http\Controllers;

use App\Models\ciudadano;
use App\Models\User;
use App\Http\Requests\StoreusuarioRequest;
use App\Http\Requests\StoreciudadanoRequest;
use App\Http\Requests\UpdateciudadanoRequest;
use Illuminate\Support\Facades\Hash;

class CiudadanoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        return view('ciudadanos.index');

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
        


        /* Esta validacion se encarga de que los campos donde se diligencio esten llenos */
        $validacion = $request->validate([
            'TipoDocumento' => 'required',
            'numeroDocumento' => 'required|numeric',
            'nombres' => 'required',
            'apellidos' => 'required',
            'sexo' => 'required',
            'correo_elec' => 'required',
            'municipio' => 'required',
            'barrio' => 'required',
            'fecha_nac' => 'required',
            'etnia' => 'required',
            'cond_discapacitado' => 'required',
            'estrato' => 'required',
            'nivel_edu' => 'required',
            'accesodispositivos' => 'required',
            'dispositivos_tecno' => 'required',
            'conectividad' => 'required',
            'afiliacion' => 'required'
        ]);

        $user = new User;
        $user->name = $request->nombres;
        $user->email = $request->correo_elec;
        $user->password = Hash::make($request->numeroDocumento);
        $user->role = "usuario";
        $user->save();

        //Ya despues de la validacion, se llenan en un array del Modelo, es decir, genera un array, y se va llenando
        //Conforme
        $ciudadano = new ciudadano;
        $ciudadano->num_docs = $request->numeroDocumento;
        $ciudadano->nombres = $request->nombres;
        $ciudadano->apellidos = $request->apellidos;
        $ciudadano->tel_cel = $request->tel_cel;
        $ciudadano->tel_fijo = $request->tel_fijo;
        $ciudadano->correo_elec = $request->correo_elec;
        $ciudadano->municipio = $request->municipio;
        $ciudadano->barrio = $request->barrio;
        $ciudadano->fecha_nac = $request->fecha_nac;
        $ciudadano->etnia = $request->etnia;
        $ciudadano->cond_disca = $request->cond_discapacitado;
        $ciudadano->conec_inter = $request->conectividad;
        $ciudadano->afiliacion = $request->afiliacion;
        $ciudadano->usuario_idusuario = $user->id;
        $ciudadano->sexo_idsexo = $request->sexo;
        $ciudadano->tipodoc_idtipodoc = $request->TipoDocumento;
        $ciudadano->nivel_edu_idnivel = $request->nivel_edu;
        $ciudadano->dispositivos_tecnologicos_iddispositivos = $request->dispositivos_tecno;
        $ciudadano->estrato_idestrato = $request->estrato;
        $ciudadano->save();

        return redirect()->route('registroCiudadano')->with('success' , 'Ciudadano Registrado con exito');
        
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
