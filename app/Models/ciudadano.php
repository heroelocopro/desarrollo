<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ciudadano extends Model
{
    use HasFactory;

    //Indica los campos que se tienen que llenar
    protected $filleable = [
        'TipoDocumento',
        'TipoDocumento' ,
        'numeroDocumento',
        'nombres'  ,
        'apellidos'  ,
        'sexo'  ,
        'correo_elec  ',
        'municipio'  ,
        'barrio-vereda  ',
        'fecha_nac'  ,
        'etnia'  ,
        'cond_discapacitado  ',
        'estrato'  ,
        'nivel_edu'  ,
        'accesodispositivos  ',
        'dispositivos_tecno  ',
        'conectividad  ',
        'afiliacion  ',
    ];
}
