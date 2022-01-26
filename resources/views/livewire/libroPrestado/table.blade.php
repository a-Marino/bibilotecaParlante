<div class="mt-5">
    <h2 class="mb-2 text-xl font-semibold">Socios:</h2>
    <input type="text" wire:model='buscador' placeholder="Buscar por: nombre, apellido, libro, fecha de salida, o fecha de devolución " class="md:w-1/2 rounded-md border-gray-300 focus:border-red-300 focus:ring focus:ring-red-200 focus:ring-opacity-50 shadow-sm mb-5">

<table class="table-auto">
  <thead>
    <tr>
      <th>Socio</th>
      <th>Libro</th>
      <th>Fecha de salida</th>
      <th>Fecha de devolución</th>
    </tr>
  </thead>
  <tbody>
    @foreach($librosPrestados as $libroPrestado)
        <tr>
        <td>{{$libroPrestado->nombre_socio}} {{$libroPrestado->apellido_socio}} </td>
        <td>{{$libroPrestado->nombreLibro}}</td>
        <td>{{$libroPrestado->fecha_salida}}</td>
        <td>{{$libroPrestado->fecha_devolucion}}</td>
        </tr>
    @endforeach
  </tbody>
</table>


</div>