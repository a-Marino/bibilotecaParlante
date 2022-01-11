<div class="mt-5">
    <div class="flex flex-col">
        <label>Nombre</label>
        <x-jet-input type="text" class="w-1/2" placeholder="Nombre" wire:model="nombre_editorial"/>
    </div>
    @error("nombre_editorial") <span>{{$message}}</span> @enderror
</div>