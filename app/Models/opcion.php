<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class opcion extends Model
{
    use HasFactory;

    protected $filleable = [
        'opciones',
        'preguntas_idpreguntas'
    ];
}
