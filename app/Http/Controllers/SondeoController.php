<?php

namespace App\Http\Controllers;

use App\Models\sondeo;
use App\Http\Requests\StoresondeoRequest;
use App\Http\Requests\UpdatesondeoRequest;

class SondeoController extends Controller
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
     * @param  \App\Http\Requests\StoresondeoRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoresondeoRequest $request)
    {
        //
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
