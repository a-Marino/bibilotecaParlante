<div>
    <div>
        <input type="text" wire:model="buscador" placeholder="Buscar">
   
    <table class="table-auto">
    <thead>
        <tr>
        <th>Editorial</th>
        <!--solo puede ver los botones el administrador -->
        @can('botones.editar-eliminar')
            <th>Editar</th>
            <th>Eliminar</th>
        @endcan
        </tr>
    </thead>
    <tbody>
        @foreach($editoriales as $editorial)
            <tr>
            <td><a href="">{{$editorial->nombre_editorial}}</a></td>  
            @can('botones.editar-eliminar')   
                <td><button wire:click="edit({{$editorial->id}})" >Editar</button></td>   
                <td><button wire:click="delete({{ $editorial->id }})"> Eliminar</button></td>
            @endcan
            </tr>
        @endforeach
    </tbody>
    </table>
    {{ $editoriales->links() }}

    </div>
</div>