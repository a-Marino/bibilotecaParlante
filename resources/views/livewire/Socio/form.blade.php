<div class="mt-5">
    <div class="flex flex-col space-y-5">
        <div class="flex flex-col md:flex-row md:space-x-2">
            <div class="flex flex-col">
                <label>Nombre</label>
                <x-jet-input type="text" placeholder="Nombre" wire:model="nombre_socio"/>
            </div>
            <div class="flex flex-col">
                <label>Apellido</label>
                <x-jet-input type="text" placeholder="Apellido" wire:model="apellido_socio"/>
            </div>
        </div>
        <div class="flex flex-col md:flex-row md:space-x-2">
            <div class="flex flex-col">
                <label>Documento</label>
                <x-jet-input type="number" placeholder="12345678" wire:model="documento"/>
            </div>
            <div class="flex flex-col">
                <label>Fecha de Nacimiento</label>
                <x-jet-input type="date" placeholder="01/01/01" wire:model="fecha_nac_socio"/>
            </div>
        </div>

        @error("nombre_socio") <span>{{$message}}</span> @enderror
        @error("apellido_socio") <span>{{$message}}</span> @enderror
        @error("documento") <span>{{$message}}</span> @enderror
        @error("fecha_nac_socio") <span>{{$message}}</span> @enderror
    </div>
</div>