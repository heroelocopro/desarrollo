<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class grupo_poblacional extends Model
{
    use HasFactory;

    protected $filleable = [
        'nom_grup_pob',
    ];
}
