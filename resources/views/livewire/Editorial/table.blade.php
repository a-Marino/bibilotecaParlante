<div class="mt-5">
    <div>
        <h2 class="mb-2 text-xl font-semibold">Buscar editorial:</h2>
        <x-jet-input type="text" wire:model="buscador" placeholder="Editorial" class="w-1/2"/>

        <h3 class="text-3xl font-bold mt-5">Editoriales:</h3>
        <div class="flex flex-col space-y-5 mt-5">
            @foreach($editoriales as $editorial)
            <div class="flex flex-row items-center space-x-5 px-5">
                    <div>
                        <a href="editoriales/{{$editorial->id}}" class="text-lg font-semibold hover:text-red-600">{{$editorial->nombre_editorial}}</a>
                    </div>
                            
                    @can('botones.editar-eliminar')
                        <div>
                            <button wire:click="edit({{$editorial->id}})" class="inline-flex items-center px-4 py-2 bg-white border-2 border-red-600 rounded-md font-semibold text-xs text-black uppercase tracking-widest hover:bg-red-600 active:bg-red-800 focus:outline-none focus:border-red-900 focus:ring focus:ring-red-300 disabled:opacity-25 transition" onclick="window.scrollTo(0, 0);">Editar</button>
                            <x-jet-danger-button wire:click="delete({{$editorial->id}})">Eliminar</x-jet-danger-button>
                        </div>
                    @endcan
                </div>
            @endforeach
        </div>
   
    {{-- <table class="table-auto">
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
    </table> --}}
    {{ $editoriales->links() }}

    </div>
</div>