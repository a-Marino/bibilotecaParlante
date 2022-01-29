@extends('layouts.app')

@section('content')

<div class="mt-5">
    <h2 class="mb-2 text-xl font-semibold text-center">Libros Escritos por <span class="text-red-600">{{$autor->nombre_autor}}</span></h2>
    <div class="md:grid grid-cols-4 flex flex-col items-center space-y-5 md:space-y-0">
        @foreach($libros as $libro)
            <div style="width: 18rem;" class="p-5">
                <div>
                    <img src="/storage/{{$libro->imagen_portada}}" class="h-72 my-2" alt="portada de libro">
                    <div class="card-body">
                            <h5 class="text-xl font-semibold">{{$libro->nombreLibro}}</h5>
                            <a href="/editoriales/{{$libro->editorial->id}}" class="text-gray-600 font-bold">Editorial: <span class="text-red-600">{{$libro->editorial->nombre_editorial}}</span></a>
                            <br>
                            <a href="/generos/{{$libro->genero->id}}" class="text-gray-600  font-bold">Genero: <span class="text-red-600">{{$libro->genero->nombre_genero}}</span></a>
                            @can('botones.editar-eliminar')
                             <h5 class="self-end  text-gray-600 text-sm  font-bold">Cantidad: <span class="text-red-600 font-bold">{{$libro->stock}}</span></h5>
                            @endcan
                            @can('botones.editar-eliminar')
                            <div class="mt-2"> 
                                <td><button class="inline-flex items-center px-4 py-2 bg-white border-2 border-red-600 rounded-md font-semibold text-xs text-black uppercase tracking-widest hover:bg-red-600 active:bg-red-800 focus:outline-none focus:border-red-900 focus:ring focus:ring-red-300 disabled:opacity-25 transition" wire:click="edit({{$libro->id}})" >Editar</button></td>   
                                <td><x-jet-danger-button wire:click="delete({{$libro->id}})"> Eliminar</x-jet-danger-button></td>
                            </div>
                        @endcan
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>


@endsection