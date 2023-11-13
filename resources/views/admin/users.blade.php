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
    {{-- <x-jet-welcome /> --}}
    <!-- End Welcome Area -->

    <!-- Start Profile Area -->
    <div class="container-fluid my-5">

        <div class="breadcrumb-area">
            <h1>Inicio</h1>

            <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#"><i class='bx bx-home-alt'></i></a></li>
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Library</li>
                </ol>
            </nav>

        </div>


        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="table-responsive">

                    <table class="table table-striped">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Email</th>
                            <th scope="col">Acciones</th>
                          </tr>
                        </thead>
                        <tbody>
                            @forelse ($users as $user)
                            <tr>
                              <th scope="row">{{ $user->id }}</th>
                              <td>{{ $user->name }}</td>
                              <td>{{ $user->email }}</td>
                              <td colspan="2">
                                  <button class="btn btn-success">Ver</button>
                                <button class="btn btn-primary">Editar</button>
                                <button class="btn btn-danger">Eliminar</button>
                              </td>
                            </tr>
                                
                            @empty
                                
                            @endforelse
                        </tbody>
                    </table>

                </div>

                <div class="row">
                    <div class="col-md-12">
                        {{ $users->links() }}
                    </div>
                </div>
            </div>
        </div>


    </div>
    <!-- End Profile Area -->
    
    <div class="flex-grow-1"></div>
    
    <!-- Start Footer End -->
    @livewire('footer')
    <!-- End Footer End -->
</x-app-layout>