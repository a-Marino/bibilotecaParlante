<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LibroPrestadoController extends Controller
{
    public function index(){
        return view('libroPrestado.index');
    }

}
