<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class confirmacionVoto extends Model
{
    use HasFactory;

    protected $filleable = [
        'conf_voto',
    ];

}
