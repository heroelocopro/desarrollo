<?php

namespace App\Http\Controllers;

use App\Models\opcion;
use App\Http\Requests\StoreopcionRequest;
use App\Http\Requests\UpdateopcionRequest;

class OpcionController extends Controller
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
     * @param  \App\Http\Requests\StoreopcionRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreopcionRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\opcion  $opcion
     * @return \Illuminate\Http\Response
     */
    public function show(opcion $opcion)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\opcion  $opcion
     * @return \Illuminate\Http\Response
     */
    public function edit(opcion $opcion)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateopcionRequest  $request
     * @param  \App\Models\opcion  $opcion
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateopcionRequest $request, opcion $opcion)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\opcion  $opcion
     * @return \Illuminate\Http\Response
     */
    public function destroy(opcion $opcion)
    {
        //
    }
}
