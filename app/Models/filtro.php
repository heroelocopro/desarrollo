<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class filtro extends Model
{
    use HasFactory;

    protected $filleable = [
        'edad_inicio',
        'edad_final',
        'comuna',
        'barrio',
        'organizacion',
        'grupo_poblacional_idgrupo_poblacional',
    ];
}
