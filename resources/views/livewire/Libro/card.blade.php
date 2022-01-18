<div class="mt-5">
    <h2 class="mb-2 text-xl font-semibold">Buscar libros:</h2>
    <input type="text" wire:model='buscador' placeholder="Titulo" class="md:w-1/2 rounded-md border-gray-300 focus:border-red-300 focus:ring focus:ring-red-200 focus:ring-opacity-50 shadow-sm mb-5">

    <div class="md:grid grid-cols-4 flex flex-col items-center space-y-5 md:space-y-0">
        @foreach($libros as $libro)
            <div style="width: 18rem;">
                <div>
                    <img src="/storage/{{$libro->imagen_portada}}" class="w-50" alt="portada de libro">
                    <div class="card-body">
                        <h5 class="text-xl font-semibold">{{$libro->nombreLibro}}</h5>
                            <h5 class="text-gray-600">Autor: <span class="text-red-600 font-bold">{{$libro->autor->nombre_autor}}</span></h5>
                            <h5 class="text-gray-600">Editorial: <span class="text-red-600 font-bold">{{$libro->editorial->nombre_editorial}}</span></h5>
                            <h5 class="text-gray-600">Genero: <span class="text-red-600 font-bold">{{$libro->genero->nombre_genero}}</span></h5>
                        @can('botones.editar-eliminar')
                            <div class="mt-2"> 
                                <td><button class="inline-flex items-center px-4 py-2 bg-white border-2 border-red-600 rounded-md font-semibold text-xs text-black uppercase tracking-widest hover:bg-red-600 active:bg-red-800 focus:outline-none focus:border-red-900 focus:ring focus:ring-red-300 disabled:opacity-25 transition" wire:click="edit({{$libro->id}})" >Editar</button></td>   
                                <td><x-jet-danger-button wire:click="delete({{ $libro->id }})"> Eliminar</x-jet-danger-button></td>
                            </div>
                        @endcan
                    </div>
                </div>
            </div>
    @endforeach
    </div>
</div>
