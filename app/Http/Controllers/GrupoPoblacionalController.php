<?php

namespace App\Http\Controllers;

use App\Models\grupo_poblacional;
use App\Http\Requests\Storegrupo_poblacionalRequest;
use App\Http\Requests\Updategrupo_poblacionalRequest;

class GrupoPoblacionalController extends Controller
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
     * @param  \App\Http\Requests\Storegrupo_poblacionalRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Storegrupo_poblacionalRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\grupo_poblacional  $grupo_poblacional
     * @return \Illuminate\Http\Response
     */
    public function show(grupo_poblacional $grupo_poblacional)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\grupo_poblacional  $grupo_poblacional
     * @return \Illuminate\Http\Response
     */
    public function edit(grupo_poblacional $grupo_poblacional)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Updategrupo_poblacionalRequest  $request
     * @param  \App\Models\grupo_poblacional  $grupo_poblacional
     * @return \Illuminate\Http\Response
     */
    public function update(Updategrupo_poblacionalRequest $request, grupo_poblacional $grupo_poblacional)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\grupo_poblacional  $grupo_poblacional
     * @return \Illuminate\Http\Response
     */
    public function destroy(grupo_poblacional $grupo_poblacional)
    {
        //
    }
}
