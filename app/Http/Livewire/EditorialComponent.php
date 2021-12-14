<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\withPagination;
use App\Models\Editorial;



class EditorialComponent extends Component
{
    use withPagination;

    //la vista por defecto va a ser create
    public $view = 'create';
    public $nombre_editorial;
    public $editorial_id;


    public function render()
    {
        
        return view('livewire.editorial-component',[
            'editoriales' =>Editorial::orderBy('id','desc')->paginate(10)
        ]);
    }

    //Limpiar formulario
    public function resetCreateForm()
    {
        $this->nombre_editorial = '';
        $this->view ='create';

    }

    public function store(){
        $this->validate(['nombre_editorial'=>'required']);

        $editorial=Editorial::create([
            'nombre_editorial'=> $this->nombre_editorial
        ]);
        //actualizo el dato modificado
        $this->edit($editorial->id);
        //$this->resetCreateForm();

    }
    public function delete($id){
        
        Editorial::find($id)->delete();
    }

    public function edit($id){ 
        $editorial = Editorial::find($id);

        $this->nombre_editorial = $editorial->nombre_editorial;
        $this->editorial_id = $editorial->id;


        $this->view ='edit';
    }

    public function update(){
        $this->validate(['nombre_editorial'=>'required']);
        $editorial = Editorial::find($this->editorial_id);

        $editorial->update ([
            'nombre_editorial' => $this->nombre_editorial
        ]);

        $this->resetCreateForm();

    }


}


