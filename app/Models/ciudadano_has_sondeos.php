<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ciudadano_has_sondeos extends Model
{
    use HasFactory;

    protected $filleable = [
        'ciudadano_usuario_idusuario',
        'ciudadano_sexo_idsexo',
        'ciudadano_tipodoc_idtipodoc',
        'ciudadano_nivel_edu_idnivel_edu',
        'ciudadano_condicion_idcondicion',
        'ciudadano_dispositivos_tecnologicos_iddispositivos_tecnologicos',
        'sondeos_idsondeos'
        ];
}
