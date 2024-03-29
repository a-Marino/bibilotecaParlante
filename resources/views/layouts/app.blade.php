<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">

        @livewireStyles

        <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}" defer></script>
        <script src="{{ asset('js/btnEditar.js') }}" defer></script>
    </head>
    <body class="font-sans antialiased min-h-screen">
        <x-jet-banner />

        <div class="min-h-screen bg-gray-100">
            @livewire('navigation-menu')

            <!-- Page Heading -->
            @if (isset($header))
                <header class="bg-white shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif

            <!-- Page Content -->
            <main>
            @yield('content')
            </main>

        </div>

        @stack('modals')

        @livewireScripts

        <footer class="bg-red-700 w-full p-8 flex">
            <div class="flex flex-col">
                <div>
                    <img src="{{ asset('assets/images/logo-blanco.png') }}" alt="Biblioteca Parlante" class="h-14">
                </div>
                <div class="text-sm font-light text-gray-300  flex flex-col">
                    <span >bibliotecaparlantesuarez@hotmail.com</span>
                    <span>Harriot y Moreno, Coronel Suarez, Argentina, 7540</span>
                    <span>2926517997</span>
                </div>
            </div>
        </footer>
        @include('sweetalert::alert')
    </body>
</html>
