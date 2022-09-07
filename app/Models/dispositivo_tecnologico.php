<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class dispositivo_tecnologico extends Model
{
    use HasFactory;

    protected $filleable = [
        'nom_disp_tec',
    ];
}
