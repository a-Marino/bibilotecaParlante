@can('botones.nuevo')
    <h2 class="text-2xl font-bold">Nuevo Autor</h2>

    @include('livewire.autor.form')

    <x-jet-button wire:click="store" class="mt-5 mb-5">Guardar</x-jet-button>
@endcan