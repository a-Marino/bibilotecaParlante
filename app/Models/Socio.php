<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Socio extends Model
{
    use HasFactory;

    protected $fillable = ['nombre_socio', 'apellido_socio','fecha_nac_socio','edad','documento'];
    protected $table = 'socio';
}
