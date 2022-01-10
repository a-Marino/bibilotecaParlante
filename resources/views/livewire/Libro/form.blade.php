<div>
    <label>Nombre</label>
    <input type="text" class="form-control" placeholder="Nombre" wire:model="nombre_libro">

    <label>Año</label>
    <input type="number" class="form-control" placeholder="2020" wire:model="anio">

    <label>Stock</label>
    <input type="number" class="form-control" placeholder="1" wire:model="stock">

    <label>Autor</label>
    <select wire:model='autor_id'>
    <option style="display:none"></option>
        @foreach($autores as $autor)
            <option value="{{$autor->id}}">{{$autor->nombre_autor}}</option>
        @endforeach
    </select>

    <label>Genero</label>
    <select wire:model='genero_id'>
    <option style="display:none"></option>
        @foreach($generos as $genero)
            <option value="{{$genero->id}}" >{{$genero->nombre_genero}}</option>
        @endforeach
    </select>


    <label>Editorial</label>
    <select wire:model="editorial_id">
    <option style="display:none"></option>
        @foreach($editoriales as $editorial)
            <option value="{{$editorial->id}}" >{{$editorial->nombre_editorial}}</option>
        @endforeach
    </select>

    <input type="file" wire:model='imagen_portada'>



    @error("nombre_libro") <span>{{$message}}</span> @enderror
</div>