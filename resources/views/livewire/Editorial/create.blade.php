@can('botones.nuevo')
    <div>
        <h2 class="text-2xl font-bold">Nueva Editorial</h2>
        
        @include('livewire.editorial.form')
        
        <x-jet-button wire:click="store" class="mt-5">Guardar</x-jet-button>
    </div>
@endcan