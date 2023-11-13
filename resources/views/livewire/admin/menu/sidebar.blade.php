<!-- Start Sidemenu Area -->
<div class="sidemenu-area">
    <div class="sidemenu-header">
        <a href="{{ url('/') }}" class="navbar-brand d-flex align-items-center">
            <img src="{{ url('assets/img/small-logo.png') }}" alt="image">
            <span>{{ config('app.name', 'Laravel') }}</span>
        </a>

        <div class="burger-menu d-none d-lg-block">
            <span class="top-bar"></span>
            <span class="middle-bar"></span>
            <span class="bottom-bar"></span>
        </div>

        <div class="responsive-burger-menu d-block d-lg-none">
            <span class="top-bar"></span>
            <span class="middle-bar"></span>
            <span class="bottom-bar"></span>
        </div>
    </div>

    <div class="sidemenu-body">
        <ul class="sidemenu-nav metisMenu h-100" id="sidemenu-nav" data-simplebar>
            <li class="nav-item-title">
                Administración
            </li>

            <li class="nav-item mm-active">
                <a href="#" class="collapsed-nav-link nav-link" aria-expanded="false">
                    <span class="icon"><i class='bx bx-home-circle'></i></span>
                    <span class="menu-title">Mantenedores</span>
                </a>

                <ul class="sidemenu-nav-second-level">
                    <li class="nav-item {{ request()->routeIs('admin.users.index') ? ' mm-active' : '' }}">
                        <a href="{{ route('admin.users.index') }}" class="nav-link">
                            <span class="icon"><i class='bx bx-analyse'></i></span>
                            <span class="menu-title">Usuarios</span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="dashboard-ecommerce.html" class="nav-link">
                            <span class="icon"><i class='bx bxs-shopping-bag'></i></span>
                            <span class="menu-title">Roles</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="dashboard-ecommerce.html" class="nav-link">
                            <span class="icon"><i class='bx bxs-shopping-bag'></i></span>
                            <span class="menu-title">Permisos</span>
                        </a>
                    </li>
                </ul>
            </li>

            <li class="nav-item-title">
                Generales
            </li>

            <li class="nav-item">
                <a href="#" class="collapsed-nav-link nav-link" aria-expanded="false">
                    <span class="icon"><i class='bx bx-menu'></i></span>
                    <span class="menu-title">Mantenedores</span>
                </a>

                <ul class="sidemenu-nav-second-level">
                    <li class="nav-item">
                        <a href="#" class="collapsed-nav-link nav-link" aria-expanded="false">
                            <span class="icon"><i class='bx bx-right-arrow-alt'></i></span>
                            <span class="menu-title">Categorización</span>
                        </a>

                        <ul class="sidemenu-nav-third-level">
                            <li class="nav-item {{ request()->routeIs('admin.categories.*') ? ' mm-active' : '' }}">
                                <a href="{{ route('admin.categories.index') }}" class="nav-link">
                                    <span class="icon"><i class='bx bx-right-arrow-alt'></i></span>
                                    <span class="menu-title">Listado Categorias</span>
                                </a>
                            </li>

                        </ul>
                    </li>

                    <li class="nav-item">
                        <a href="#" class="collapsed-nav-link nav-link" aria-expanded="false">
                            <span class="icon"><i class='bx bx-right-arrow-alt'></i></span>
                            <span class="menu-title">Ubicación</span>
                        </a>

                        <ul class="sidemenu-nav-third-level">
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <span class="icon"><i class='bx bx-right-arrow-alt'></i></span>
                                    <span class="menu-title">Listado Regiones</span>
                                </a>
                            </li>

                        </ul>
                    </li>

                    <li class="nav-item">
                        <a href="{{ route('admin.services.index') }}" class="nav-link">
                            <span class="icon"><i class='bx bxs-shopping-bag'></i></span>
                            <span class="menu-title">Servicios</span>
                        </a>
                    </li>
                </ul>
            </li>

            <li class="nav-item">
                <a href="#" class="collapsed-nav-link nav-link" aria-expanded="false">
                    <span class="icon"><i class='bx bx-envelope'></i></span>
                    <span class="menu-title">Categorias</span>
                    {{-- <span class="badge">3</span> --}}
                </a>

                <ul class="sidemenu-nav-second-level">
                    <li class="nav-item">
                        <a href="app-email.html" class="nav-link">
                            <span class="icon"><i class='bx bxs-inbox'></i></span>
                            <span class="menu-title">Inbox</span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="email-read.html" class="nav-link">
                            <span class="icon"><i class='bx bxs-badge-check'></i></span>
                            <span class="menu-title">Read</span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="email-compose.html" class="nav-link">
                            <span class="icon"><i class='bx bx-send'></i></span>
                            <span class="menu-title">Compose</span>
                        </a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</div>
<!-- End Sidemenu Area -->
