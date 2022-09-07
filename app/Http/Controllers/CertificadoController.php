<?php

namespace App\Http\Controllers;

use App\Models\certificado;
use App\Models\ciudadano_has_sondeo;
use App\Models\ciudadano;
use App\Models\sondeo;
use App\Http\Requests\StorecertificadoRequest;
use App\Http\Requests\UpdatecertificadoRequest;
use PDF;

class CertificadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $certificados = certificado::join("sondeos", "certificados.sondeos_idsondeos", "=", "sondeos.idsondeos")
            ->join("ciudadano_has_sondeos", "sondeos.idsondeos", "=", "ciudadano_has_sondeos.sondeos_idsondeos")
            ->join("ciudadano_has_sondeos", "ciudadanos.idsondeos", "=", "ciudadano_has_sondeos.sondeos_idsondeos")
            ->select('sondeos.tema','certificados.fecha_gen','certificados.num_cert','ciudadanos.nombres','ciudadanos.apellidos','ciudadanos.num_doc')
            ->where("ciudadano_has_sondeos.sondeos_idsondeos", "=", 'certificados.sondeos_idsondeos')
            ->paginate(1)->get();
    }

    public function createPDF(){

        $certificados = certificado::join("sondeos", "certificados.sondeos_idsondeos", "=", "sondeos.idsondeos")
            ->join("ciudadano_has_sondeos", "sondeos.idsondeos", "=", "ciudadano_has_sondeos.sondeos_idsondeos")
            ->join("ciudadano_has_sondeos", "ciudadanos.idsondeos", "=", "ciudadano_has_sondeos.sondeos_idsondeos")
            ->select('sondeos.tema','certificados.fecha_gen','certificados.num_cert','ciudadanos.nombres','ciudadanos.apellidos','ciudadanos.num_doc')
            ->where("ciudadano_has_sondeos.sondeos_idsondeos", "=", 'certificados.sondeos_idsondeos');

        //Recuperar todos los productos de la db
        view()->share('certificados', $certificados);
        $pdf = PDF::loadView('index', $certificados);
        return $pdf->download('certificado-sondeo.pdf');
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
