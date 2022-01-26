<div class="flex flex-col space-y-3">
    <div class="flex md:space-x-4 mt-3 flex-col md:flex-row space-y-3 md:space-y-0">

    <label>Socio</label>
    <select wire:model='socio_id' class="md:w-1/2 rounded-md border-gray-300 focus:border-red-300 focus:ring focus:ring-red-200 focus:ring-opacity-50 shadow-sm">
    <option style="display:none"></option>
      @foreach($socios as $socio)
        <option value="{{$socio->id}}" >{{$socio->nombre_socio}}</option>
      @endforeach
    </select>

    <label>Libro</label>
    <select wire:model='libro_id' class="md:w-1/2 rounded-md border-gray-300 focus:border-red-300 focus:ring focus:ring-red-200 focus:ring-opacity-50 shadow-sm">
    <option style="display:none"></option>
       @foreach($libros as $libro)
        <option value="{{$libro->id}}" >{{$libro->nombreLibro}}</option>
       @endforeach

    </select>

    <div class="flex flex-col">
        <label>Fecha Salida</label>
        <x-jet-input type="date" class="rounded-md" wire:model="fechaSalida" required/>
    </div>

    <div class="flex flex-col">
        <label>Fecha devolución</label>
        <x-jet-input type="date" class="rounded-md" wire:model="fechaDevolucion" required/>
    </div>

</div>