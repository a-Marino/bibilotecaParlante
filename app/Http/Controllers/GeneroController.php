<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Genero;
use App\Models\Libro;

class GeneroController extends Controller
{
    public function index()
    {
        return view('genero.index');
    }

    public function show($id) {
        $genero = Genero::find($id);
        $libros = Libro::where('genero_id', $genero->id)->get();

        return view('livewire.genero.show', ['genero' => $genero, 'libros' => $libros]);
    }
}
