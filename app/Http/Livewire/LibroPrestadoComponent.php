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
    public $buscador;

    public function render()
    {
        $libros = Libro::all();
        $socios = Socio::all();

        $librosPrestados= DB::select("SELECT `fecha_salida`, `fecha_devolucion`,`nombreLibro`,`nombre_socio`,`apellido_socio`   FROM `libro_prestado` INNER JOIN `libro` ON `libro_prestado`.`libro_id` = `libro`.`id` INNER JOIN `socio` ON `libro_prestado`.`libro_id` = `socio`.id  WHERE `socio`.nombre_socio LIKE '%$this->buscador%' OR apellido_socio LIKE '%$this->buscador%' OR nombreLibro LIKE '%$this->buscador%' OR fecha_salida LIKE '%$this->buscador%' OR fecha_devolucion LIKE '%$this->buscador%' ");
        
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
  
}
