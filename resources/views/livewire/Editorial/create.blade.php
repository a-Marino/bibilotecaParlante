<!--permisos creados en RoleSeeder-->
@can('botones.nuevo')

<h2>Nueva Editorial</h2>


@include('livewire.editorial.form')

    <button wire:click="store">Guardar</button>
@endcan