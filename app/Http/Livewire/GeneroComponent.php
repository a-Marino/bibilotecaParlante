<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\withPagination;
use App\Models\Genero;

class GeneroComponent extends Component
{
    public $view = 'create';
    public $nombre_genero;
    public $buscador;

    public function render()
    {
        $generos = Genero::where('nombre_genero', 'like', '%'.$this->buscador. '%')->paginate(10);
        return view('livewire.genero.genero-component',compact('generos'));
    }
     
    //Limpiar formulario
    public function resetCreateForm()
    {
        $this->nombre_genero = '';
        $this->view ='create';
    }

    public function store(){
        $this->validate(['nombre_genero'=>'required']);

        $genero=Genero::create([
            'nombre_genero'=> $this->nombre_genero
        ]);
        //actualizo el dato modificado
        $this->edit($genero->id);
        $this->resetCreateForm();

    }
    public function delete($id){
        
        Genero::find($id)->delete();
    }

    public function edit($id){ 
        $genero = Genero::find($id);

        $this->nombre_genero = $genero->nombre_genero;
        $this->genero_id = $genero->id;


        $this->view ='edit';
    }

    public function update(){
        $this->validate(['nombre_genero'=>'required']);
        $genero = Genero::find($this->genero_id);

        $genero->update ([
            'nombre_genero' => $this->nombre_genero
        ]);

        $this->resetCreateForm();

    }

}
