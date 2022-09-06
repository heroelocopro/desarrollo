<?php

namespace App\Http\Controllers;

use App\Models\certificado;
use App\Http\Requests\StorecertificadoRequest;
use App\Http\Requests\UpdatecertificadoRequest;

class CertificadoController extends Controller
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
     * @param  \App\Http\Requests\StorecertificadoRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorecertificadoRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\certificado  $certificado
     * @return \Illuminate\Http\Response
     */
    public function show(certificado $certificado)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\certificado  $certificado
     * @return \Illuminate\Http\Response
     */
    public function edit(certificado $certificado)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatecertificadoRequest  $request
     * @param  \App\Models\certificado  $certificado
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatecertificadoRequest $request, certificado $certificado)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\certificado  $certificado
     * @return \Illuminate\Http\Response
     */
    public function destroy(certificado $certificado)
    {
        //
    }
}
