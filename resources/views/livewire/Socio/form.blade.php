<div>
    <label>Nombre</label>
        <input type="text" class="form-control" placeholder="Nombre" wire:model="nombre_socio">
    <label>Apellido</label>
        <input type="text" class="form-control" placeholder="Apellido" wire:model="apellido_socio">
    <label>Documento</label>
        <input type="number" class="form-control" placeholder="12345678" wire:model="documento">
    <label>Fecha de Nacimiento</label>
        <input type="date" class="form-control" placeholder="01/01/01" wire:model="fecha_nac_socio">


    @error("nombre_socio") <span>{{$message}}</span> @enderror
    @error("apellido_socio") <span>{{$message}}</span> @enderror
    @error("documento") <span>{{$message}}</span> @enderror
    @error("fecha_nac_socio") <span>{{$message}}</span> @enderror

</div>