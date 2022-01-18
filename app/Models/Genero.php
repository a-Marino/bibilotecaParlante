<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Genero extends Model
{
    use HasFactory;

    protected $fillable = ['nombre_genero'];
    protected $table = 'genero';

    //un genero uno o muchos libros
    public function libro(){
        return $this->hasMany('App/Models/Libro');
    }
}
