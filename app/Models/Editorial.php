<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Editorial extends Model
{
    use HasFactory;
    protected $fillable = ['nombre_editorial'];
    protected $table = 'editorial';

    //una editorial uno o muchos libros
    public function libro(){
        return $this->hasMany('\App\Models\Libro');
    }
}
