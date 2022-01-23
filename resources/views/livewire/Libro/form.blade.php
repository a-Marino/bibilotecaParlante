<div class="flex flex-col space-y-3">
    <div class="flex md:space-x-4 mt-3 flex-col md:flex-row space-y-3 md:space-y-0">
        <div class="flex flex-col">
            <label>Nombre</label>
            <x-jet-input type="text" class="rounded-md" placeholder="Nombre" wire:model="nombre_libro" required/>
        </div>

        <div class="flex flex-col">
            <label>Año</label>
            <x-jet-input type="number" class="rounded-md" placeholder="2020" wire:model="anio" required/>
        </div>

        <div class="flex flex-col">
            <label>Stock</label>
            <x-jet-input type="number" class="rounded-md" placeholder="1" wire:model="stock" required/>
        </div>
    </div>

    <label>Autor</label>
    <select wire:model='autor_id' class="md:w-1/2 rounded-md border-gray-300 focus:border-red-300 focus:ring focus:ring-red-200 focus:ring-opacity-50 shadow-sm">
    <option style="display:none"></option>
        @foreach($autores as $autor)
            <option value="{{$autor->id}}">{{$autor->nombre_autor}}</option>
        @endforeach
    </select>

    <label>Genero</label>
    <select wire:model='genero_id' class="md:w-1/2 rounded-md border-gray-300 focus:border-red-300 focus:ring focus:ring-red-200 focus:ring-opacity-50 shadow-sm">
    <option style="display:none"></option>
        @foreach($generos as $genero)
            <option value="{{$genero->id}}" >{{$genero->nombre_genero}}</option>
        @endforeach
    </select>


    <label>Editorial</label>
    <select wire:model="editorial_id" class="md:w-1/2 rounded-md border-gray-300 focus:border-red-300 focus:ring focus:ring-red-200 focus:ring-opacity-50 shadow-sm">
    <option style="display:none"></option>
        @foreach($editoriales as $editorial)
            <option value="{{$editorial->id}}" >{{$editorial->nombre_editorial}}</option>
        @endforeach
    </select>

    <label>Portada</label>
    <input type="file" wire:model='imagen_portada' class="mt-4">

    @error("nombre_libro") <span>{{$message}}</span> @enderror
</div>