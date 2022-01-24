@extends('layouts.app')
@section('content')
    <div>
        {{-- BIENVENIDOS --}}
        <div class="bg-red-100 py-8 flex flex-col justify-center items-center space-y-3">
            <div>
               <span class="text-red-700 font-black text-4xl">BIENVENIDOS</span>
            </div>
            <div>
                <img src="{{ asset('assets/images/logo-negro.png') }}" alt="Biblioteca Parlante" class="w-44">
            </div>
        </div>
        {{-- LIBROS --}}
        <div class="flex flex-col mt-8">
            <div class="flex flex-col">
                <span class="ml-20 uppercase font-black text-lg">Ultimos libros</span>
                <div class="bg-red-700 h-2 w-60"></div>
            </div>
            <div class="flex flex-col md:flex-row space-x-0 md:space-x-20 mt-5 md:ml-20 md:space-y-0 space-y-10 p-7 md:p-0 mb-5">
                 @foreach($libros->take(4)  as $libro)
                    <div class="flex flex-col">
                        <img src="/storage/{{$libro->imagen_portada}}" class="h-72 my-2 w-min" alt="portada de libro">
                        <h5 class="text-xl font-semibold">{{$libro->nombreLibro}}</h5>
                        <h5 class="text-gray-600">Autor: <a href="autores/{{$libro->autor->id}}" class="text-red-600 font-bold">{{$libro->autor->nombre_autor}}</a></h5>
                        <h5 class="text-gray-600">Editorial: <a href="editoriales/{{$libro->editorial->id}}" class="text-red-600 font-bold">{{$libro->editorial->nombre_editorial}}</a></h5>
                        <h5 class="text-gray-600">Genero: <a href="generos/{{$libro->genero->id}}" class="text-red-600 font-bold">{{$libro->genero->nombre_genero}}</a></h5>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
