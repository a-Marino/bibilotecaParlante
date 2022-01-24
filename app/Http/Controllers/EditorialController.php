<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Editorial;
use App\Models\Libro;

class EditorialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     * 
     */
 
    public function index()
    {
        return view('editorial.index');
    }

    public function show($id) {
        $editorial = Editorial::find($id);
        $libros = Libro::where('editorial_id', $editorial->id)->get();

        return view('livewire.editorial.show', ['editorial' => $editorial, 'libros' => $libros]);
    }
}
