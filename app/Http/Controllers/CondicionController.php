<?php

namespace App\Http\Controllers;

use App\Models\condicion;
use App\Http\Requests\StorecondicionRequest;
use App\Http\Requests\UpdatecondicionRequest;

class CondicionController extends Controller
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
     * @param  \App\Http\Requests\StorecondicionRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorecondicionRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\condicion  $condicion
     * @return \Illuminate\Http\Response
     */
    public function show(condicion $condicion)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\condicion  $condicion
     * @return \Illuminate\Http\Response
     */
    public function edit(condicion $condicion)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatecondicionRequest  $request
     * @param  \App\Models\condicion  $condicion
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatecondicionRequest $request, condicion $condicion)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\condicion  $condicion
     * @return \Illuminate\Http\Response
     */
    public function destroy(condicion $condicion)
    {
        //
    }
}
