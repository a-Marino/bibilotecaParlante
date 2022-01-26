<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LibroPrestado extends Model
{
    use HasFactory;

    protected $fillable = ['fecha_salida', 'fecha_devolucion','libro_id','socio_id'];
    protected $table='libro_prestado'; 

      public function libro(){
        return $this->belongsTo('\App\Models\Libro');
    }

    public function socio(){
        return $this->belongsTo('\App\Models\Socio');
    }
}
