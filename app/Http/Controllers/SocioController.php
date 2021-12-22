<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SocioController extends Controller
{
    public function index(){
        return view('socio.index');
    }
}
