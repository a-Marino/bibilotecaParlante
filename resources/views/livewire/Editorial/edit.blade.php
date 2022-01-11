<div>
    <h2 class="text-2xl font-bold">Editar Editorial</h2>

    @include('livewire.editorial.form')

    <div class="mt-5">
        <button wire:click="update" class="inline-flex items-center px-4 py-2 bg-white border-2 border-red-600 rounded-md font-semibold text-xs text-black uppercase tracking-widest hover:bg-red-600 active:bg-red-800 focus:outline-none focus:border-red-900 focus:ring focus:ring-red-300 disabled:opacity-25 transition">Actualizar</button>
        <x-jet-danger-button wire:click="resetCreateForm">Cancelar</x-jet-danger-button>
    </div>
</div>
