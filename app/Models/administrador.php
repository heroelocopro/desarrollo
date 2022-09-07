<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class administrador extends Model
{
    use HasFactory;

    protected $filleable = [
        'credencial_adm',
        'usuario_idusuario',
    ];
}
