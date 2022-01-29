<div class="mt-5">
    <h2 class="mb-2 text-xl font-semibold">Socios:</h2>
    <input type="text" wire:model='buscador' placeholder="Buscar por: nombre, apellido, libro, fecha de salida, o fecha de devolución " class="md:w-1/2 rounded-md border-gray-300 focus:border-red-300 focus:ring focus:ring-red-200 focus:ring-opacity-50 shadow-sm mb-5">

  <div class="overflow-auto rounded-lg shadow hidden md:block">
    <table class="w-full">
      <thead class="bg-gray-50 border-b-2 border-gray-200">
        <tr>
          <th class="p-3 text-md font-bold tracking-wide text-left">Socio</th>
          <th class="p-3 text-md font-bold tracking-wide text-left">Libro</th>
          <th class="p-3 text-md font-bold tracking-wide text-left">Fecha de salida</th>
          <th class="p-3 text-md font-bold tracking-wide text-left">Fecha de devolución</th>
        </tr>
      </thead>
      <tbody class="divide-y divide-gray-100">
        @foreach($librosPrestados as $libroPrestado)
          <tr class="bg-white">
            <td class="p-3 text-gray-700 whitespace-nowrap">{{$libroPrestado->nombre_socio}} {{$libroPrestado->apellido_socio}}</td>
            <td class="p-3 text-gray-700 whitespace-nowrap">{{$libroPrestado->nombreLibro}}</td>
            <td class="p-3 text-gray-700 whitespace-nowrap">{{$libroPrestado->fecha_salida}}</td>
            <td class="p-3 text-gray-700 whitespace-nowrap">{{$libroPrestado->fecha_devolucion}}</td>
          </tr>
        @endforeach
      </tbody>
    </table>
  </div>

  <h3 class="text-xl font-bold md:hidden">Libros prestados:</h3>
  @foreach($librosPrestados as $libroPrestado)
  <div class="grid grid-cols-1 mb-5 mt-2 md:hidden">
    <div class="bg-white p-4 rounded-lg shadow space-y-4"> 
      <div class="space-y-3">
        <div><span class="font-bold">Socio: </span>{{$libroPrestado->nombre_socio}} {{$libroPrestado->apellido_socio}}</div>
        <div><span class="font-bold">Libro: </span>{{$libroPrestado->nombreLibro}}</div>
        <div><span class="font-bold">Fecha de salida: </span>{{$libroPrestado->fecha_salida}}</div>
        <div><span class="font-bold">Fecha de devolución: </span>{{$libroPrestado->fecha_devolucion}}</div>
      </div>
    </div>
  </div>
  @endforeach
</div>