<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
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
        $certificados = DB::select('SELECT sondeos.tema,certificados.fecha_gen,certificados.num_cert,ciudadanos.nombres,ciudadanos.apellidos,ciudadanos.num_docs FROM certificados INNER JOIN sondeos on certificados.sondeos_id = sondeos.idsondeos INNER JOIN ciudadano_has_sondeos ON sondeos.idsondeos = ciudadano_has_sondeos.ciudadano_has_sondeo_idsondeo INNER JOIN ciudadanos on ciudadano_has_sondeos.ciudadano_usuario_idusuario = ciudadanos.usuario_idusuario WHERE ciudadano_has_sondeos.ciudadano_has_sondeo_idsondeo = certificados.sondeos_id;')->paginate(1)->get();
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
        $validacion = $request->validate([
            'fecha_gen' => 'required',
            'num_cert' => 'required|min_digits:6',
        ]);


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
