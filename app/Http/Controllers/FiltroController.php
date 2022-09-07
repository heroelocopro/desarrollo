<?php

namespace App\Http\Controllers;

use App\Models\filtro;
use App\Http\Requests\StorefiltroRequest;
use App\Http\Requests\UpdatefiltroRequest;

class FiltroController extends Controller
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
     * @param  \App\Http\Requests\StorefiltroRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorefiltroRequest $request)
    {
        $filtro = new filtro;
        $filtro->edad_inicio = $request->edad_inicio;
        $filtro->edad_final = $request->edad_final;
        $filtro->comuna = $request->comuna;
        $filtro->barrio = $request->barrio;
        $filtro->organizacion = $request->organizacion;
        $filtro->grupo_poblacional_id = $request->grupo_poblacional_idgrupo_poblacional;

        $filtro->save();

        return redirect()->route('sondeos');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\filtro  $filtro
     * @return \Illuminate\Http\Response
     */
    public function show(filtro $filtro)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\filtro  $filtro
     * @return \Illuminate\Http\Response
     */
    public function edit(filtro $filtro)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatefiltroRequest  $request
     * @param  \App\Models\filtro  $filtro
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatefiltroRequest $request, filtro $filtro)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\filtro  $filtro
     * @return \Illuminate\Http\Response
     */
    public function destroy(filtro $filtro)
    {
        //
    }
}
