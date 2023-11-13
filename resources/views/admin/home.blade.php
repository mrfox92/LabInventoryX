<x-app-layout>

    {{-- Componente de Blade: Contenido estatico --}}
    {{-- <x-slot name="header">
        <h2 class="h4 font-weight-bold">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <x-jet-welcome /> --}}
    
    <!-- Top Navbar Area -->
    @livewire('navigation')
    <!-- End Top Navbar Area -->
    
    <!-- Welcome Area -->
    <x-jet-welcome />
    <!-- End Welcome Area -->
    
    <div class="flex-grow-1"></div>
    
    <!-- Start Footer End -->
    @livewire('footer')
    <!-- End Footer End -->
</x-app-layout>