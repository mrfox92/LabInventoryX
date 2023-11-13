<x-app-layout>

    {{-- Componente de Blade: Contenido estatico --}}
    {{-- <x-slot name="header">
        <h2 class="h4 font-weight-bold">
            {{ __('Dashboard') }}
        </h2>
    </x-slot> --}}

    <h1>{{ \App\Helpers\UserHelper::navigation() }}</h1>
    
    <!-- Welcome Area -->
    <x-jet-welcome />
    <!-- End Welcome Area -->
    
</x-app-layout>