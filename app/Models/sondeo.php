<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sondeo extends Model
{
    use HasFactory;

    protected $filleable = [
        'tema',
        'fecha_inicio',
        'hora_inicio',
        'tipo',
        'fecha_cierre',
        'icono',
        'hora_cierre',
        'fecha_pub',
        'hora_pub',
        'administrador_idadministrador',
        'administrador_usuario_idusuario',
        'preguntas_idpreguntas',
        'confirmacion_voto_idconfirmacion_voto',
        'filtro_idfiltro',
        'filtro_grupo_poblacional_idgrupo_poblacional',
        'condicion_idcondicion',
    ];
}
