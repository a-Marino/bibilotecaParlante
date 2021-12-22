<div>
    <div>
        <input type="text" wire:model="buscador" placeholder="Buscar">
   
    <table class="table-auto">
    <thead>
        <tr>
        <th>Genero</th>
        <!--solo puede ver los botones el administrador -->
        @can('botones.editar-eliminar')
            <th>Editar</th>
            <th>Eliminar</th>
        @endcan
        </tr>
    </thead>
    <tbody>
        @foreach ($generos as $genero)
        <tr>
        <td><a href="">{{$genero->nombre_genero}}</a></td>  
        @can('botones.editar-eliminar')   
            <td><button wire:click="edit({{$genero->id}})" >Editar</button></td>   
            <td><button wire:click="delete({{ $genero->id }})"> Eliminar</button></td>
        @endcan
        </tr>
        @endforeach
    </tbody>
    </table>
    {{ $generos->links() }}

    </div>
</div>