<div class="mt-5">
    <div class="flex flex-col">
        <label>Genero</label>
        <x-jet-input type="text" class="w-1/2" placeholder="Nombre" wire:model="nombre_genero"/>
    </div>
    @error("nombre_genero") <span>{{$message}}</span> @enderror
</div>