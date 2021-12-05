<x-app-layout>
    <div>
        {{-- BIENVENIDOS --}}
        <div class="bg-red-100 py-8 flex flex-col justify-center items-center space-y-3">
            <div>
               <span class="text-red-700 font-black text-4xl">BIENVENIDOS</span>
            </div>
            <div>
                <img src="{{ asset('assets/images/logo-negro.png') }}" alt="Biblioteca Parlante" class="w-44">
            </div>
        </div>
        {{-- LIBROS --}}
        <div class="flex mt-8">
            <div class="flex flex-col">
                <span class="ml-20 uppercase font-black text-lg">Libros</span>
                <div class="bg-red-700 h-2"></div>
            </div>
            <div class="flex flex-col md:flex-row">
                
            </div>
        </div>
    </div>
</x-app-layout>
