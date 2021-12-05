@props(['active'])

@php
$classes = ($active ?? false)
            ? 'inline-flex items-center px-1 pt-1 border-b-2 border-red-400 font-medium leading-5 text-white focus:outline-none focus:border-red-700 transition uppercase'
            : 'uppercase inline-flex items-center px-1 pt-1 border-b-2 border-transparent font-medium leading-5 text-white hover:text-white hover:border-red-300 focus:outline-none focus:text-white focus:border-red-300 transition';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
