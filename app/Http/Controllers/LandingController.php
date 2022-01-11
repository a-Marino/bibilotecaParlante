<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Libro;

class LandingController extends Controller
{
    public function index(){
        
        $libros = Libro::all();

        return view('welcome', ['libros'=>$libros]);
    }
}
