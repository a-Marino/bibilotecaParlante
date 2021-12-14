<div>
    <div>
        <input type="text" wire:model="buscador" placeholder="Buscar">
   
    <table class="table-auto">
    <thead>
        <tr>
        <th>Editorial</th>
        <th>Editar</th>
        <th>Eliminar</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($editoriales as $editorial)
        <tr>
        <td>{{$editorial->nombre_editorial}}</td>
        <td><button wire:click="edit({{$editorial->id}})" >Editar</button></td>
        <td> <button wire:click="delete({{ $editorial->id }})"> Eliminar</button></td>
        </tr>
        @endforeach
    </tbody>
    </table>
    {{ $editoriales->links() }}

    </div>
</div>