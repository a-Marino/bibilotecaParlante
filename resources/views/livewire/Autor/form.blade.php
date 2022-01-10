<div class="mt-5">
    <div class="flex flex-col">
        <label>Nombre</label>
        <x-jet-input type="text" class="w-1/2" placeholder="Nombre" wire:model="nombre_autor"/>
    </div>      

    @error("nombre_autor") <span>{{$message}}</span> @enderror
</div>