<?php

namespace App\Http\Controllers;

use App\Models\informe;
use App\Http\Requests\StoreinformeRequest;
use App\Http\Requests\UpdateinformeRequest;

class InformeController extends Controller
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
     * @param  \App\Http\Requests\StoreinformeRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreinformeRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\informe  $informe
     * @return \Illuminate\Http\Response
     */
    public function show(informe $informe)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\informe  $informe
     * @return \Illuminate\Http\Response
     */
    public function edit(informe $informe)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateinformeRequest  $request
     * @param  \App\Models\informe  $informe
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateinformeRequest $request, informe $informe)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\informe  $informe
     * @return \Illuminate\Http\Response
     */
    public function destroy(informe $informe)
    {
        //
    }
}
