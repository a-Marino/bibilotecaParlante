<div>
    <div>
        <input type="text" wire:model="buscador" placeholder="Buscar">
   
    <table class="table-auto">
    <thead>
        <tr>
        <th>Autor</th>
        <!--solo puede ver los botones el administrador -->
        @can('botones.editar-eliminar')
            <th>Editar</th>
            <th>Eliminar</th>
        @endcan
        </tr>
    </thead>
    <tbody>
        @foreach ($autores as $autor)
        <tr>
        <td>{{$autor->nombre_autor}}</td>  
        @can('botones.editar-eliminar')   
            <td><button wire:click="edit({{$autor->id}})" >Editar</button></td>   
            <td><button wire:click="delete({{ $autor->id }})"> Eliminar</button></td>
        @endcan
        </tr>
        @endforeach
    </tbody>
    </table>
    {{ $autores->links() }}

    </div>
</div>