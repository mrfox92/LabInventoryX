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
                Servicios
            </li>

            
            <li class="nav-item">
                <a href="#" class="collapsed-nav-link nav-link" aria-expanded="true">
                    <span class="icon"><i class='bx bx-home-circle'></i></span>
                    <span class="menu-title">Categorías</span>
                    <span class="badge">{{ count( $categories ) }}</span>
                </a>
                
                <ul class="sidemenu-nav-second-level mm-collapse mm-hide" style="">
                    
                    @foreach ($categories as $category)
                    
                        {{-- <li class="nav-item mm-active"> --}}
                        <li class="nav-item">
                            <a href="#" class="collapsed-nav-link nav-link" aria-expanded="true">
                                <span class="menu-title">{{ $category->name }}</span>
                                <!-- TODO: Agregar contador artículos inventario por categoria -->

                            </a>
                        </li>
                    @endforeach
                    
                </ul>
            </li>

            <li class="nav-item-title">
                Apps
            </li>

            <li class="nav-item">
                <a href="#" class="collapsed-nav-link nav-link" aria-expanded="false">
                    <span class="icon"><i class='bx bx-envelope'></i></span>
                    <span class="menu-title">Email</span>
                    <span class="badge">3</span>
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

            <li class="nav-item">
                <a href="app-chat.html" class="nav-link">
                    <span class="icon"><i class='bx bx-message'></i></span>
                    <span class="menu-title">Chat</span>
                </a>
            </li>

            <li class="nav-item">
                <a href="app-todo.html" class="nav-link">
                    <span class="icon"><i class='bx bx-badge-check'></i></span>
                    <span class="menu-title">Todo</span>
                </a>
            </li>

            <li class="nav-item">
                <a href="app-calendar.html" class="nav-link">
                    <span class="icon"><i class='bx bx-calendar'></i></span>
                    <span class="menu-title">Calendar</span>
                </a>
            </li>

            <li class="nav-item-title">
                UI Elements
            </li>

            <li class="nav-item">
                <a href="grid.html" class="nav-link">
                    <span class="icon"><i class='bx bx-grid-alt'></i></span>
                    <span class="menu-title">Grid</span>
                </a>
            </li>

            <li class="nav-item">
                <a href="colors.html" class="nav-link">
                    <span class="icon"><i class='bx bxs-color-fill'></i></span>
                    <span class="menu-title">Colors</span>
                </a>
            </li>

            <li class="nav-item">
                <a href="#" class="collapsed-nav-link nav-link" aria-expanded="false">
                    <span class="icon"><i class='bx bx-brightness'></i></span>
                    <span class="menu-title">Icons</span>
                </a>

                <ul class="sidemenu-nav-second-level">
                    <li class="nav-item">
                        <a href="boxicons.html" class="nav-link">
                            <span class="icon"><i class='bx bx-right-arrow-alt'></i></span>
                            <span class="menu-title">BoxIcons</span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="feathericons.html" class="nav-link">
                            <span class="icon"><i class='bx bx-right-arrow-alt'></i></span>
                            <span class="menu-title">Feather Icons</span>
                        </a>
                    </li>
                </ul>
            </li>

            <li class="nav-item">
                <a href="#" class="collapsed-nav-link nav-link" aria-expanded="false">
                    <span class="icon"><i class='bx bx-card'></i></span>
                    <span class="menu-title">Card</span>
                </a>

                <ul class="sidemenu-nav-second-level">
                    <li class="nav-item">
                        <a href="basic-card.html" class="nav-link">
                            <span class="icon"><i class='bx bx-right-arrow-alt'></i></span>
                            <span class="menu-title">Basic Card</span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="colors-card.html" class="nav-link">
                            <span class="icon"><i class='bx bx-right-arrow-alt'></i></span>
                            <span class="menu-title">Colors Card</span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="statistics-card.html" class="nav-link">
                            <span class="icon"><i class='bx bx-right-arrow-alt'></i></span>
                            <span class="menu-title">Statistics Card</span>
                        </a>
                    </li>
                </ul>
            </li>

            <li class="nav-item mm-active">
                <a href="#" class="collapsed-nav-link nav-link" aria-expanded="true">
                    <span class="icon"><i class="bx bx-menu"></i></span>
                    <span class="menu-title">Menu Levels</span>
                </a>

                <ul class="sidemenu-nav-second-level mm-collapse mm-show" style="">
                    <li class="nav-item">
                        <a href="#" class="nav-link" aria-expanded="false">
                            <span class="icon"><i class="bx bx-right-arrow-alt"></i></span>
                            <span class="menu-title">First Level</span>
                        </a>
                    </li>

                    <li class="nav-item mm-active">
                        <a href="#" class="collapsed-nav-link nav-link" aria-expanded="true">
                            <span class="icon"><i class="bx bx-right-arrow-alt"></i></span>
                            <span class="menu-title">Second Level</span>
                        </a>

                        <ul class="sidemenu-nav-third-level mm-collapse mm-show" style="">
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <span class="icon"><i class="bx bx-right-arrow-alt"></i></span>
                                    <span class="menu-title">Second Level 2.1</span>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <span class="icon"><i class="bx bx-right-arrow-alt"></i></span>
                                    <span class="menu-title">Second Level 2.2</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>

        </ul>
    </div>
</div>
<!-- End Sidemenu Area -->
