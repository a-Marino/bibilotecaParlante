<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Libro;
use App\Models\LibroPrestado;
use App\Models\Socio;
use Illuminate\Support\Facades\DB;

class LibroPrestadoComponent extends Component
{
    public $view = 'create';
    public $socio_id;
    public $libro_id;
    public $fechaSalida;
    public $fechaDevolucion;
    public $libroPrestadoId;
    public $buscador;

    public function render()
    {
        $libros = Libro::all();
        $socios = Socio::all();
        $librosPrestados= DB::select("SELECT  `libro_prestado`.`id`,`socio_id`,`libro_prestado`.`libro_id`,`fecha_salida`, `fecha_devolucion`,`nombreLibro`,`nombre_socio`, `libro_prestado`.`id`,`socio_id`,`libro_prestado`.`libro_id`,`fecha_salida`, `fecha_devolucion`,`nombreLibro`,`nombre_socio`,`apellido_socio`  FROM `libro_prestado`INNER JOIN `libro` on `libro_prestado`.`libro_id` = `libro`.`id` inner join `socio` on `socio`.`id` = `libro_prestado`.`socio_id` WHERE `socio`.nombre_socio LIKE '%$this->buscador%' OR apellido_socio LIKE '%$this->buscador%' OR nombreLibro LIKE '%$this->buscador%' OR fecha_salida LIKE '%$this->buscador%' OR fecha_devolucion LIKE '%$this->buscador%' OR CONCAT( nombre_socio,' ', apellido_socio) LIKE '%$this->buscador%'"); 
       
        return view('livewire.libroPrestado.libro-prestado-component', ['libros' => $libros, 'socios' => $socios, 'librosPrestados' => $librosPrestados]);
    }

    
    public function store(){
        //validar
        $this->validate([
            'socio_id'=>'required',
            'libro_id'=>'required',
            'fechaSalida'=>'required',
            'fechaDevolucion'=>'required'
            ]
        );
        //create
        $libroPrestado = LibroPrestado::create([
            'fecha_salida'=>$this->fechaSalida,
            'fecha_devolucion'=>$this->fechaDevolucion,
            'libro_id'=>$this->libro_id,
            'socio_id'=>$this->socio_id
        ]);
        $this->resetCreateForm();
    }

      //Limpiar formulario
      public function resetCreateForm()
      {
        $this->socio_id = '';
        $this->libro_id ='';
        $this->fechaSalida='';
        $this->fechaDevolucion ='';
        
        $this->view ='create';
      }

      public function delete($id){
        
        LibroPrestado::find($id)->delete();
    }

    public function edit($id){ 
        $libroPrestado = LibroPrestado::find($id);

        $this->socio_id = $libroPrestado->socio_id;
        $this->libro_id = $libroPrestado->libro_id;
        $this->fechaSalida = $libroPrestado->fecha_salida;
        $this->fechaDevolucion = $libroPrestado->fecha_devolucion;
        $this->libroPrestadoId = $libroPrestado->id;
        $this->view ='edit';
    }
  
    
    public function update(){
        $this->validate([
            'socio_id'=>'required',
            'libro_id'=>'required',
            'fechaSalida'=>'required',
            'fechaDevolucion'=>'required'
            ]
        );

        $libroPrestado = LibroPrestado::find($this->libroPrestadoId);

        $libroPrestado->update ([
            'socio_id' => $this->socio_id,
            'libro_id' =>$this->libro_id,
            'fecha_salida' =>$this->fechaSalida,
            'fecha_devolucion' => $this->fechaDevolucion
        ]);

        $this->resetCreateForm();

    }
}
