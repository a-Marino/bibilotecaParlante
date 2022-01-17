<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'App\Http\Controllers\LandingController@index');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', 'App\Http\Controllers\LandingController@index');

Route::middleware(['auth:sanctum', 'verified'])->get('/socios', function () {
    return view('socio.index');
})->name('socios');

Route::middleware(['auth:sanctum', 'verified'])->get('/autores', function () {
    return view('autor.index');
})->name('autores');

Route::middleware(['auth:sanctum', 'verified'])->get('/generos', function () {
    return view('genero.index');
})->name('generos');

Route::middleware(['auth:sanctum', 'verified'])->get('/editoriales', function () {
    return view('editorial.index');
})->name('editoriales');

Route::resource('libros', 'App\Http\Controllers\LibroController');



