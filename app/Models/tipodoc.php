<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tipodoc extends Model
{
    use HasFactory;

    protected $filleable = [
        'nombre_tipo_doc',
    ];
}
