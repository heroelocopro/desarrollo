<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class certificado extends Model
{
    use HasFactory;

    protected $filleable = [
        'fecha_gen',
        'num_cert',
    ];
}
