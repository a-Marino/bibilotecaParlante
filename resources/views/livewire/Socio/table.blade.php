<div>
    <div>
        <input type="text" wire:model="buscador" placeholder="Buscar">
   
    <table class="table-auto">
    <thead>
        <tr>
        <th>Nombre</th>
        <th>Apellido</th>
        <th>Documento</th>
        <th>Fecha de nacimiento</th>
        <th>Edad</th>
        <th>Editar</th>
        <th>Eliminar</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($socios as $socio)
        <tr>
        <td>{{$socio->nombre_socio}}</td>  
        <td>{{$socio->apellido_socio}}</td>  
        <td>{{$socio->documento}}</td>  
        <td>{{$socio->fecha_nac_socio}}</td>
        <td>{{$socio->edad}}</td>

       
        <td><button wire:click="edit({{$socio->id}})" >Editar</button></td>   
        <td><button wire:click="delete({{ $socio->id }})"> Eliminar</button></td>
        </tr>
        @endforeach
    </tbody>
    </table>

    </div>
</div>