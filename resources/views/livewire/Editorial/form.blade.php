<div>
    <label>Nombre</label>
    <input type="text" class="form-control" placeholder="Nombre" wire:model="nombre_editorial">

    @error("nombre_editorial") <span>{{$message}}</span> @enderror
</div>