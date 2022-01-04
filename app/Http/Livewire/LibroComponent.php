<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Libro;
use App\models\Editorial;
use App\models\Genero;
use App\models\Autor;
use Livewire\WithFileUploads;


class LibroComponent extends Component
{
    use WithFileUploads;

    public $view = 'create';
    public $nombre_libro;
    public $anio;
    public $stock;
    public $editorial_id;
    public $genero_id;
    public $autor_id;
    public $imagen_portada;

    public function render()
    {
        $editoriales = Editorial::all();
        $generos= Genero::all();
        $autores= Autor::all();
        return view('livewire.libro.libro-component', ['editoriales'=>$editoriales, 'generos'=>$generos, 'autores'=>$autores]);
    }

    public function store(){
        $this->validate([
            'nombre_libro'=>'required',
            'anio'=>'required',
            'stock'=>'required',
            'editorial_id' => 'required',
            'genero_id' => 'required',
            'autor_id' => 'required',
            'imagen_portada' => 'required|image|max:2048']);

        $image= $this->imagen_portada->store('portadas');
        $extension = pathinfo($image, PATHINFO_EXTENSION);
        $nombre_imagen_portada = pathinfo($image, PATHINFO_FILENAME);

        $libro=Libro::create([
            'nombreLibro'=> $this->nombre_libro,
            'anio'=> $this->anio,
            'stock' =>$this->stock,
            'editorial_id'=> $this->editorial_id,
            'genero_id'=>$this->genero_id,
            'autor_id'=> $this->autor_id,
            'imagen_portada' =>$nombre_imagen_portada.time().'.'.$extension

        ]);
        $this->resetCreateForm();

    }

    //Limpiar formulario
    public function resetCreateForm()
    {
        $this->nombre_libro = '';
        $this->anio = '';
        $this->stock ='';
        $this->editorial_id ='';
        $this->genero_id ='';
        $this->autor_id ='';
        $this->imagen_portada ='';

        $this->view ='create';
    }
}
