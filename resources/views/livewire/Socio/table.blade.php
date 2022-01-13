<div class="mt-5">
    <div>
        <h2 class="mb-2 text-xl font-semibold">Buscar socios:</h2>
        <x-jet-input type="text" wire:model="buscador" placeholder="Socio" class="w-1/2"/>

        <h3 class="text-3xl font-bold mt-5">Socios:</h3>
        <div class="flex flex-col space-y-5 mt-5">
            @foreach($socios as $socio)
            <div class="flex flex-col md:flex-row items-center space-x-5 px-5">
                    <div>
                        <span class="text-lg font-semibold hover:text-red-600">{{$socio->nombre_socio}} {{$socio->apellido_socio}} - DNI: {{$socio->documento}} - Edad: {{$socio->edad}}</span>
                    </div>
                            
                    @can('botones.editar-eliminar')
                        <div class="mt-2 self-start md:mt-0">
                            <button wire:click="edit({{$socio->id}})" class="inline-flex items-center px-4 py-2 bg-white border-2 border-red-600 rounded-md font-semibold text-xs text-black uppercase tracking-widest hover:bg-red-600 active:bg-red-800 focus:outline-none focus:border-red-900 focus:ring focus:ring-red-300 disabled:opacity-25 transition">Editar</button>
                            <x-jet-danger-button wire:click="delete({{$socio->id}})">Eliminar</x-jet-danger-button>
                        </div>
                    @endcan
                </div>
            @endforeach
        </div>
   
    {{-- <table class="table-auto">
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
    </table> --}}

    </div>
</div>