<?php

namespace App\Exports;

use App\Json;
use App\Models\sondeo;
use App\Models\opcion;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithStyles;

class SondeoExport implements FromCollection, WithHeadings
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
            'Icono del sondeo',
            'Hora de cierre del sondeo',
            'Fecha de publicacion del sondeo',
            'Hora de publicacion del sondeo',
            'Preguntas del sondeo',
            'Opciones del sondeo',
            'Cantidad de personas participantes',
            'Cantidad de personas por opcion',
        ];
    }

    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {

        $sondeoExcel = sondeo::join("informe", "sondeos.idsondeos", "=", "informe.sondeos_idsondeos")
            ->join("ciudadano_has_sondeos", "sondeos.idsondeos", "=", "ciudadano_has_sondeos.sondeos_idsondeos")
            ->join("ciudadanos", "ciudadano_has_sondeos.sondeos_idsondeos", "=", "ciudadanos.idsondeos")
            ->join("preguntas", "sondeos.preguntas_idpreguntas", "=", "preguntas.id")
            ->join("opcions", "preguntas.id", "=", "opcions.preguntas_idpreguntas")
            ->select('informe.id','informe.nombre_informe','sondeos.tema','sondeos.fecha_inicio','sondeos.hora_inicio','sondeos.tipo','sondeos.fecha_cierre','sondeos.icono','sondeos.hora_cierre','sondeos.fecha_pub','sondeos.hora_pub','count("sondeos.preguntas_idpreguntas")','count("opcions.id")','count("ciudadanos_has_sondeos.ciudadano_usuario_idusuario")','count("")')
            ->where("ciudadano_has_sondeos.sondeos_idsondeos", "=", 'certificados.sondeos_idsondeos');
        return sondeo::all();
    }
}
