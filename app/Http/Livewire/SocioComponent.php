<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\withPagination;
use App\Models\Socio;
use Illuminate\Support\Facades\DB;

class SocioComponent extends Component
{
    public $view = 'create';
    public $nombre_socio;
    public $apellido_socio;
    public $fecha_nac_socio;
    public $documento;
    public $buscador;
    

    public function render()
    {
        //calcular edad y obener datos buscados
        $socios = DB::select("SELECT *, TIMESTAMPDIFF(YEAR,fecha_nac_socio, now()) AS edad from socio  WHERE nombre_socio LIKE '%$this->buscador%'OR apellido_socio LIKE '%$this->buscador%' OR documento LIKE '%$this->buscador%'");

        return view('livewire.socio.socio-component',compact('socios'));
    }

     //Limpiar formulario
     public function resetCreateForm()
     {
         $this->nombre_socio = '';
         $this->apellido_socio = '';
         $this->documento='';
         $this->view ='create';
 
     }
 
     public function store(){
         $this->validate(['nombre_socio'=>'required']);
         $this->validate(['apellido_socio'=>'required']);
         $this->validate(['fecha_nac_socio'=>'required']);
      //   $this->validate(['edad'=>'required']);
         $this->validate(['documento'=>'required']);
 
         $socio=Socio::create([
             'nombre_socio'=> $this->nombre_socio,
             'apellido_socio'=> $this->apellido_socio,
             'documento' => $this->documento,
             'fecha_nac_socio' => $this->fecha_nac_socio,
            // 'edad' =>$this->edad
         ]);
         //actualizo el dato modificado
         $this->edit($socio->id);
         $this->resetCreateForm();
 
     }
     public function delete($id){
         
         Socio::find($id)->delete();
     }
 
     public function edit($id){ 
         $socio = Socio::find($id);
 
         $this->nombre_socio= $socio->nombre_socio;
         $this->apellido_socio= $socio->apellido_socio;
         $this->documento= $socio->documento;
         $this->fecha_nac_socio= $socio->fecha_nac_socio;
         $this->socio_id = $socio->id;
  
         $this->view ='edit';
     }
 
     public function update(){
        $this->validate(['nombre_socio'=>'required']);
        $this->validate(['apellido_socio'=>'required']);
        $this->validate(['fecha_nac_socio'=>'required']);
        //$this->validate(['edad'=>'required']);
        $this->validate(['documento'=>'required']);

         $socio= Socio::find($this->socio_id);
 
         $socio->update ([
            'nombre_socio'=> $this->nombre_socio,
            'apellido_socio'=> $this->apellido_socio,
            'documento' => $this->documento,
            'fecha_nac_socio' => $this->fecha_nac_socio,
         ]);
 
         $this->resetCreateForm();
 
     }
        
 }
   
