<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Autor extends Model
{
    use HasFactory;
    protected $fillable = ['nombre_autor'];
    protected $table = 'autor';

    //un autor uno o muchos libros
    public function libro(){
        return $this->hasMany('App/Models/Libro');
    }
}
