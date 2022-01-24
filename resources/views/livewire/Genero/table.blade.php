<div class="mt-5">
    <div>
        <h2 class="mb-2 text-xl font-semibold">Buscar generos:</h2>
        <x-jet-input type="text" wire:model="buscador" placeholder="Genero" class="w-1/2"/>

        <h3 class="text-3xl font-bold mt-5">Generos:</h3>
        <div class="flex flex-col space-y-5 mt-5">
            @foreach($generos as $genero)
            <div class="flex flex-row items-center space-x-5 px-5">
                    <div>
                        <a href="generos/{{$genero->id}}" class="text-lg font-semibold hover:text-red-600">{{$genero->nombre_genero}}</a>
                    </div>
                        
                    @can('botones.editar-eliminar')
                        <div>
                            <button wire:click="edit({{$genero->id}})" class="inline-flex items-center px-4 py-2 bg-white border-2 border-red-600 rounded-md font-semibold text-xs text-black uppercase tracking-widest hover:bg-red-600 active:bg-red-800 focus:outline-none focus:border-red-900 focus:ring focus:ring-red-300 disabled:opacity-25 transition">Editar</button>
                            <x-jet-danger-button wire:click="delete({{$genero->id}})">Eliminar</x-jet-danger-button>
                        </div>
                    @endcan
                </div>
            @endforeach
        </div>
   
    {{-- <table class="table-auto">
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
    </table> --}}
    {{ $generos->links() }}

    </div>
</div>