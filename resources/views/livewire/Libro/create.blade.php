@can('botones.nuevo')
    <h2>Nuevo Libro</h2>


    @include('livewire.libro.form')

    <button wire:click="store">Guardar</button>

@endcan