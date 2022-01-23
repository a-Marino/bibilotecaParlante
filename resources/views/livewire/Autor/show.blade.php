@extends('layouts.app')

@section('content')

<div class="p-3">
    {{$autor->nombre_autor}}

    <h2>Libros:</h2>
    @foreach ($libros as $libro)
        <h1>{{$libro->nombreLibro}}</h1>
    @endforeach
</div>


@endsection