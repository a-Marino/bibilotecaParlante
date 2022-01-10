@can('botones.nuevo')
    <div>
        <h2 class="text-2xl font-bold">Nuevo Libro</h2>

        @include('livewire.libro.form')

        <x-jet-button wire:click="store" class="mt-5">Guardar</x-jet-button>
    </div>
@endcan