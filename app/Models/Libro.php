<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Libro extends Model
{
    use HasFactory;

    protected $fillable = ['nombreLibro','anio','stock','editorial_id','autor_id','genero_id','imagen_portada'];
    protected $table = 'libro';

    //un libro una editorial
    public function editorial(){
        return $this->belongsTo('\App\Models\Editorial');
    }
    //un libro un autor
    public function autor(){
        return $this->belongsTo('\App\Models\Autor');
    }
    //un libro un genero
    public function genero(){
        return $this->belongsTo('\App\Models\Genero');
    }



}
