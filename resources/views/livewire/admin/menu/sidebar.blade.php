<!-- Start Sidemenu Area -->
<div class="sidemenu-area">
    <div class="sidemenu-header">
        <a href="{{ url('/') }}" class="navbar-brand d-flex align-items-center">
            {{-- <img src="{{ url('assets/img/small-logo.png') }}" alt="image"> --}}
            <img width="70" height="70" class="img-fluid" src="{{ url('assets/img/logo/logo.png') }}" alt="image">
            {{-- <img width="150" height="70" class="img-fluid" src="{{ url('assets/img/logo/logo1.png') }}" alt="image"> --}}
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
                    <span class="menu-title">Laboratorio</span>
                </a>

                <ul class="sidemenu-nav-second-level">

                    <li class="nav-item {{ request()->routeIs('admin.categories.index') ? ' mm-active' : '' }}">
                        <a href="{{ route('admin.categories.index') }}" class="nav-link">
                            <span class="icon"><i class='bx bx-right-arrow-alt'></i></span>
                            <span class="menu-title">Categorias</span>
                        </a>
                    </li>
                    <li class="nav-item {{ request()->routeIs('admin.inventories.index') ? ' mm-active' : '' }}">
                        <a href="{{ route('admin.inventories.index') }}" class="nav-link">
                            <span class="icon"><i class='bx bx-right-arrow-alt'></i></span>
                            <span class="menu-title">Inventario</span>
                        </a>
                    </li>
                </ul>
            </li>

        </ul>
    </div>
</div>
<!-- End Sidemenu Area -->
