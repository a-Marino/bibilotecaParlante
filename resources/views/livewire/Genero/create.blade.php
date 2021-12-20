@can('botones.nuevo')
    <h2>Nuevo Genero</h2>


    @include('livewire.genero.form')

    <button wire:click="store">Guardar</button>

@endcan