<div>
    <label>Nombre</label>
    <input type="text" class="form-control" placeholder="Nombre" wire:model="nombre_autor">

    @error("nombre_autor") <span>{{$message}}</span> @enderror
</div>