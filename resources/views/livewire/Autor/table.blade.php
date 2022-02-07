<div>
    <div>
        <h2 class="mt-5 mb-2 text-xl font-semibold">Buscar autores:</h2>
        <x-jet-input type="text" wire:model="buscador" placeholder="Autor" class="w-1/2"/>

        <h3 class="text-3xl font-bold mt-5">Autores:</h3>
        <div class="flex flex-col space-y-5 mt-5">
            @foreach($autores as $autor)
            <div class="flex flex-col md:flex-row items-center space-x-5 px-5">
                    <div>
                        <a href="autores/{{$autor->id}}" class="text-lg font-semibold hover:text-red-600">{{$autor->nombre_autor}}</a>
                    </div>
                    
                    @can('botones.editar-eliminar')
                        <div>
                            <button wire:click="edit({{$autor->id}})" class="inline-flex items-center px-4 py-2 bg-white border-2 border-red-600 rounded-md font-semibold text-xs text-black uppercase tracking-widest hover:bg-red-600 active:bg-red-800 focus:outline-none focus:border-red-900 focus:ring focus:ring-red-300 disabled:opacity-25 transition" onclick="window.scrollTo(0, 0);">Editar</button>
                            <x-jet-danger-button wire:click="delete({{$autor->id}})">Eliminar</x-jet-danger-button>
                        </div>
                    @endcan
                </div>
            @endforeach
        </div>
   
        {{-- <table class="table-auto border-collapse border border-red-600 mt-5">
            <thead>
                <tr>
                    <th class="border border-red-600">Autor</th>
                    <!--solo puede ver los botones el administrador -->
                    @can('botones.editar-eliminar')
                        <th class="border border-red-600">Editar</th>
                        <th class="border border-red-600">Eliminar</th>
                    @endcan
                </tr>
            </thead>
            <tbody>
                @foreach ($autores as $autor)
                    <tr>
                        <td><a href="">{{$autor->nombre_autor}}</a></td>  
                            @can('botones.editar-eliminar')   
                                <td><button wire:click="edit({{$autor->id}})" >Editar</button></td>   
                                <td><button wire:click="delete({{ $autor->id }})"> Eliminar</button></td>
                            @endcan
                    </tr>
                @endforeach
            </tbody>
        </table> --}}

        {{ $autores->links() }}
    </div>
</div>