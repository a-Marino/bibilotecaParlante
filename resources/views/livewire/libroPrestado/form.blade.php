<div class="flex flex-col md:flex-row space-x-0 md:space-x-5">
  <div class="flex flex-col">
    <label>Socio</label>
    <select wire:model='socio_id' class="rounded-md border-gray-300 focus:border-red-300 focus:ring focus:ring-red-200 focus:ring-opacity-50 shadow-sm">
      <option style="display:none"></option>
        @foreach($socios as $socio)
          <option value="{{$socio->id}}">{{$socio->nombre_socio}} {{$socio->apellido_socio}} - {{$socio->documento}}</option>
        @endforeach
    </select>
  </div>
  <div class="flex flex-col">
    <label>Libro</label>
    <select wire:model='libro_id' class="rounded-md border-gray-300 focus:border-red-300 focus:ring focus:ring-red-200 focus:ring-opacity-50 shadow-sm">
      <option style="display:none"></option>
        @foreach($libros as $libro)
          <option value="{{$libro->id}}" >{{$libro->nombreLibro}}</option>
        @endforeach
    </select>
  </div>
  <div class="flex flex-col">
    <label>Fecha Salida</label>
    <x-jet-input type="date" class="rounded-md" wire:model="fechaSalida" required/>
  </div>
  <div class="flex flex-col">
    <label>Fecha devolución</label>
    <x-jet-input type="date" class="rounded-md" wire:model="fechaDevolucion" required/>
  </div>
</div>