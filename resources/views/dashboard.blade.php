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
    

    {{-- add element to footer --}}
    <x-slot name="footer">
        
        <div class="row mt-2 mb-4">
          <div class="col-4">
            <div class="card">
              <div class="card-body">
                <h3 class="card-title">Title</h3>
                <p class="card-text">Text</p>
              </div>
            </div>
          </div>
          <div class="col-4">
            <div class="card">
              <div class="card-body">
                <h3 class="card-title">Title</h3>
                <p class="card-text">Text</p>
              </div>
            </div>
          </div>
          <div class="col-4">
            <div class="card">
              <div class="card-body">
                <h3 class="card-title">Title</h3>
                <p class="card-text">Text</p>
              </div>
            </div>
          </div>
        </div>
    </x-slot>

</x-app-layout>