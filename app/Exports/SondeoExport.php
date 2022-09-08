<?php

namespace App\Exports;

use App\Models\sondeo;
use App\Models\informe;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithStyles;
use Maatwebsite\Excel\Concerns\FromArray;
use Illuminate\Support\Facades\DB;

class SondeoExport implements FromArray, WithHeadings
{

    public function headings(): array
    {
        return [
            '#ID',
            'Nombre Informe',
            'Tema del sondeo',
            'Fecha inicial del sondeo',
            'Hora inicial del sondeo',
            'Tipo del sondeo', 
            'Fecha de cierre del sondeo',
            'Hora de cierre del sondeo',
            'Fecha de publicacion del sondeo', 
            'Hora de publicacion del sondeo', 
            'Preguntas del sondeo',
            'Opciones del sondeo', 
            'Cantidad de personas participantes', 
            'Cantidad de personas por opcion',
        ];
        
    }

    public function array(): array
    {
        $sondeoExcel1 = DB::table('informes')
        ->select('informes.id','informes.nombre_informe' ,'sondeos.tema' ,'sondeos.fecha_inicio' ,'sondeos.hora_inicio' ,'sondeos.tipo' ,'sondeos.fecha_cierre' ,'sondeos.hora_cierre' ,'sondeos.fecha_pub' ,'sondeos.hora_pub')
        ->join('sondeos', 'sondeos.id','=','informes.sondeos_idsondeo')
        ->join('administradors','administradors.id','=','sondeos.administrador_idadministrador')  
        ->where('sondeos.administrador_idadministrador','=','administradors.id;')
        ->get();

        $sondeoExcel2 = DB::table('sondeos')
        ->select('preguntas.nombre_pregunta')
        ->join('grupo_preguntas','grupo_preguntas.id', '=', 'sondeos.preguntas_idpreguntas')
        ->join('preguntas','preguntas.grupopreguntas_id','=','grupo_preguntas.id' )
        ->join('administradors','administradors.id','=','sondeos.administrador_idadministrador')
        ->where('sondeos.administrador_idadministrador','=','administradors.id')
        ->groupBy('preguntas.grupopreguntas_id')
        ->get();

        $sondeoExcel3 = DB::table('opcions')
        ->select('opcions.opciones')
        ->join('preguntas','preguntas.id','=','opcions.preguntas_idpreguntas')
        ->join('grupo_preguntas','grupo_preguntas.id','=','preguntas.grupopreguntas_id')
        ->join('sondeos','sondeos.preguntas_idpreguntas','=','grupo_preguntas.id')
        ->join('administradors','administradors.id','=','sondeos.administrador_idadministrador')
        ->where('sondeos.administrador_idadministrador', '=','administradors.id')
        ->groupBy('opcions.preguntas_idpreguntas')
        ->get();

        $sondeoExcel4 = DB::table('sondeos')
        ->select(DB::raw('count(ciudadano_has_sondeos.ciudadano_usuario_idusuario)'))
        ->join('ciudadano_has_sondeos','ciudadano_has_sondeos.ciudadano_has_sondeos','=','sondeos.id')
        ->join('administradors','administradors.id','=','sondeos.administrador_idadministrador')
        ->where('sondeos.administrador_idadministrador', '=' ,'administradors.id')
        ->groupBy('ciudadano_has_sondeos.ciudadano_has_sondeos')
        ->get();
        // ->count('ciudadano_has_sondeos.ciudadano_usuario_idusuario')

        $sondeoExcel5 = DB::table('opcions')
        ->select(DB::raw('count(opcions.ciudadano_idciudadano)'))
        ->join('preguntas','preguntas.id','=','opcions.preguntas_idpreguntas')
        ->join('grupo_preguntas','grupo_preguntas.id','=','preguntas.grupopreguntas_id')
        ->join('sondeos','sondeos.preguntas_idpreguntas','=','grupo_preguntas.id')
        ->join('administradors','administradors.id','=','sondeos.administrador_idadministrador')
        ->where('sondeos.administrador_idadministrador', '=' ,'administradors.id')
        ->groupBy('opcions.opciones')
        ->get();

        return $sondeoExcel = [$sondeoExcel1, $sondeoExcel2, $sondeoExcel3, $sondeoExcel4, $sondeoExcel5];
    }
}

/* 
        */


