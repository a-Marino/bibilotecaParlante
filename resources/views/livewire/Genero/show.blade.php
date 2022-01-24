@extends('layouts.app')

@section('content')

<div class="p-3">
    <h1 class="text-4xl text-center mt-5 font-bold">{{$genero->nombre_genero}}</h1>
    <h2 class="text-2xl font-semibold mt-5">Libros del genero:</h2>
    @foreach ($libros as $libro)
        <div class="flex flex-col">
            <a href="" class="text-xl mt-2 hover:text-red-600">{{$libro->nombreLibro}}</a>
        </div>
    @endforeach
</div>


@endsection