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

Route::middleware(['auth:sanctum', 'verified'])->get('/librosPrestados', function () {
    return view('libroPrestado.index');
})->name('librosPrestados');



Route::resource('libros', 'App\Http\Controllers\LibroController');
Route::resource('autores', 'App\Http\Controllers\AutorController');
Route::resource('generos', 'App\Http\Controllers\GeneroController');
Route::resource('editoriales', 'App\Http\Controllers\EditorialController');



