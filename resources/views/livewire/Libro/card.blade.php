<div class="">

<input type="text" wire:model='buscador'  placeholder="buscar">

@foreach($libros as $libro)
    <div class="card" style="width: 18rem;">
    <img src="/storage/{{$libro->imagen_portada}}" class=" img-thumbnail" alt="portada de libro">
        <div class="card-body">
            <h5 class="card-title">{{$libro->nombreLibro}}</h5>
            @can('botones.editar-eliminar')   
                <td><button wire:click="edit({{$libro->id}})" >Editar</button></td>   
                <td><button wire:click="delete({{ $libro->id }})"> Eliminar</button></td>
            @endcan
        </div>
    </div>
   
@endforeach

</div>
