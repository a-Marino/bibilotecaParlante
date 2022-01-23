<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Libro;
use App\models\Editorial;
use App\models\Genero;
use App\models\Autor;
use Livewire\WithFileUploads;
use Livewire\withPagination;
use Illuminate\Support\Facades\Storage; //eliminar imagenes del servidor

class LibroComponent extends Component
{
    use WithFileUploads;

    public $view = 'create';
    public $libro_id;
    public $nombre_libro;
    public $anio;
    public $stock;
    public $editorial_id;
    public $genero_id;
    public $autor_id;
    public $imagen_portada;
    public $buscador;
    public $confirmingLibroDeletion = false;

    public function render()
    {
        $editoriales = Editorial::all();
        $generos= Genero::all();
        $autores= Autor::all();
        $libros = Libro::where('nombreLibro','LIKE','%'.$this->buscador.'%')->paginate(10);
        return view('livewire.libro.libro-component', ['editoriales'=>$editoriales, 'generos'=>$generos, 'autores'=>$autores,'libros'=>$libros]);
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

        $image= $this->imagen_portada->store('files','public');

        $libro=Libro::create([
            'nombreLibro'=> $this->nombre_libro,
            'anio'=> $this->anio,
            'stock' =>$this->stock,
            'editorial_id'=> $this->editorial_id,
            'genero_id'=>$this->genero_id,
            'autor_id'=> $this->autor_id,
            'imagen_portada' => $image

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

    public function delete($id){
        $libro= Libro::find($id);

        Storage::disk('public')->delete('files',$libro->imagen_portada);

        $libro->delete();
    }

    public function edit($id){ 
      $libro = Libro::find($id);
    
      $this->nombre_libro = $libro->nombreLibro;
      $this->anio = $libro->anio;
      $this->stock= $libro->stock;
      $this->autor_id = $libro->autor_id;
      $this->genero_id = $libro->genero_id;
      $this->editorial_id = $libro->editorial_id;
      $this->imagen_portada = $libro->imagen_portada;
      $this->libro_id = $libro->id;
      $this->view ='edit';
    }

    public function update(){
        $this->validate([
            'nombre_libro'=>'required',
            'anio'=>'required',
            'stock'=>'required',
            'editorial_id' => 'required',
            'genero_id' => 'required',
            'autor_id' => 'required',
            'imagen_portada' => 'required|image|max:2048']);
    
        $libro = Libro::find($this->libro_id);
        $image= $this->imagen_portada->store('files','public');
        
        
        Storage::disk('public')->delete('files',$libro->imagen_portada);

        $libro->update([
            'nombreLibro' => $this->nombre_libro,
            'anio' => $this->anio,
            'stock' =>$this->stock,
            'editorial_id' =>$this->editorial_id,
            'genero_id' =>$this->genero_id,
            'autor_id' =>$this->autor_id,
            'imagen_portada' =>$image,
        ]);

        $this->resetCreateForm();
    }

    public function confirmLibroDeletion() {
        $this->confirmingLibroDeletion = true;
    }
}
