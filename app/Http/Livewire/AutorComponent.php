<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Autor;
use Livewire\withPagination;

class AutorComponent extends Component
{
    public $view = 'create';
    public $buscador;
    public $nombre_autor;

    public function render()
    {

        $autores = Autor::where('nombre_autor', 'like', '%'.$this->buscador. '%')->paginate(10);
        return view('livewire.autor.autor-component',compact('autores'));
    }
    
    //Limpiar formulario
    public function resetCreateForm()
    {
        $this->nombre_autor = '';
        $this->view ='create';

    }

    public function store(){
        $this->validate(['nombre_autor'=>'required']);

        $autor=Autor::create([
            'nombre_autor'=> $this->nombre_autor
        ]);
        //actualizo el dato modificado
        $this->edit($autor->id);
        $this->resetCreateForm();

    }
    public function delete($id){
        
        autor::find($id)->delete();
    }

    public function edit($id){ 
        $autor = Autor::find($id);

        $this->nombre_autor = $autor->nombre_autor;
        $this->autor_id = $autor->id;


        $this->view ='edit';
    }

    public function update(){
        $this->validate(['nombre_autor'=>'required']);
        $autor = Autor::find($this->autor_id);

        $autor->update ([
            'nombre_autor' => $this->nombre_autor
        ]);

        $this->resetCreateForm();

    }

}
