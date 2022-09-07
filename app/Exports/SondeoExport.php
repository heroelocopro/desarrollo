<?php

namespace App\Exports;

use App\Json;
use App\Models\sondeo;
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
            'ID Sondeo de informe',
            'ID del sondeo',
            'Tema del sondeo',
            'Fecha inicial del sondeo',
            'Hora inicial del sondeo',
            'Tipo del sondeo',
            'Fecha de cierre del sondeo',
            'Icono del sondeo',
            'Hora de cierre del sondeo',
            'Fecha de publicacion del sondeo',
            'Hora de publicacion del sondeo',
            'ID del Administrador asociado al sondeo',
            'ID Usuario del Administrador',
            'ID de preguntas asociadas',
            'ID de Confirmacion de voto o participacion del ciudadano al sondeo',
            'ID del Filtro del sondeo',
            'ID del grupo poblacional del filtro',
            'ID de la condicion del ciudadano',
        ];
    }

    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        $sondeoExcel = sondeo::join("sondeos", "informe.sondeos_idsondeos", "=", "sondeos.idsondeos")
            ->join("ciudadano_has_sondeos", "sondeos.idsondeos", "=", "ciudadano_has_sondeos.sondeos_idsondeos")
            ->join("ciudadano_has_sondeos", "ciudadanos.idsondeos", "=", "ciudadano_has_sondeos.sondeos_idsondeos")
            ->select('informe.*','sondeos.*')
            ->where("ciudadano_has_sondeos.sondeos_idsondeos", "=", 'certificados.sondeos_idsondeos');
        return sondeo::all();
    }
}
