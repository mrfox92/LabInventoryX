<!-- Top Navbar Area -->
<nav class="navbar top-navbar navbar-expand">
    <div class="collapse navbar-collapse" id="navbarSupportContent">
        <div class="responsive-burger-menu d-block d-lg-none">
            <span class="top-bar"></span>
            <span class="middle-bar"></span>
            <span class="bottom-bar"></span>
        </div>

        <div class="nav-search-form ms-auto d-md-block"></div>

        <ul class="navbar-nav right-nav align-items-center">
            <li class="nav-item">
                <a class="nav-link bx-fullscreen-btn" id="fullscreen-button">
                    <i class="bx bx-fullscreen"></i>
                </a>
            </li>

            <li class="nav-item dropdown profile-nav-item">
                <button href="#" class="nav-link dropdown-toggle" style="background-color: #F8F9FB !important;" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <div class="menu-profile">
                        <span class="name text-dark">Hola! {{ auth()->user()->name }}</span>
                        {{-- <img src="{{ asset('assets/img/user1.jpg') }}" class="rounded-circle" alt="image"> --}}
                        <img src="{{ asset('assets/img/avatar/avatar1.png') }}" class="rounded-circle" alt="image">
                    </div>
                </button>

                <div class="dropdown-menu">
                    <div class="dropdown-header d-flex flex-column align-items-center">
                        <div class="figure mb-3">
                            {{-- <img src="{{ asset('assets/img/user1.jpg') }}" class="rounded-circle" alt="image"> --}}
                            <img src="{{ asset('assets/img/avatar/avatar1.png') }}" class="rounded-circle" alt="image">
                        </div>

                        <div class="info text-center">
                            <span class="name">{{ auth()->user()->name }}</span>
                            <span class="badge bg-primary">{{ auth()->user()->getRoleNames()[0] ? 'Administrador' : 'No especificado' }}</span>
                            <p class="mb-3 email">{{ auth()->user()->email }}</p>
                        </div>
                    </div>

                    <div class="dropdown-body">
                        <ul class="profile-nav p-0 pt-3">
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class='bx bx-user'></i> <span>{{ __('Perfil') }}</span>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a href="{{ route('profile.show') }}" class="nav-link">
                                    <i class='bx bx-edit-alt'></i> <span>{{ __('Editar Perfil') }}</span>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class='bx bx-cog'></i> <span>{{ __('Configuraciones') }}</span>
                                </a>
                            </li>
                        </ul>
                    </div>

                    <div class="dropdown-footer">
                        <ul class="profile-nav">
                            <li class="nav-item">
                                @include('partials.logout_form')
                            </li>
                        </ul>
                    </div>

                </div>
            </li>
        </ul>
    </div>
</nav>
<!-- End Top Navbar Area -->