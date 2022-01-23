<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Autor;
use App\Models\Libro;

class AutorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('autor.index');
    }

    public function show($id) {
        $autor = Autor::find($id);
        $libros = Libro::where('autor_id', $autor->id)->get();

        return view('livewire.autor.show', ['autor' => $autor, 'libros' => $libros]);
    }
}
