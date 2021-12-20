<div>
    <label>Genero</label>
    <input type="text" class="form-control" placeholder="Nombre" wire:model="nombre_genero">

    @error("nombre_genero") <span>{{$message}}</span> @enderror
</div>