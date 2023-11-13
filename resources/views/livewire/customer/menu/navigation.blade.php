<!-- Top Navbar Area -->
<nav class="navbar top-navbar navbar-expand">
    <div class="collapse navbar-collapse" id="navbarSupportContent">
        <div class="responsive-burger-menu d-block d-lg-none">
            <span class="top-bar"></span>
            <span class="middle-bar"></span>
            <span class="bottom-bar"></span>
        </div>
        
        <ul class="navbar-nav left-nav align-items-center">
            <li class="nav-item">
                <a href="app-email.html" class="nav-link" data-bs-toggle="tooltip" data-placement="bottom" title="Email">
                    <i class="bx bx-envelope"></i>
                </a>
            </li>

            <li class="nav-item">
                <a href="app-chat.html" class="nav-link" data-bs-toggle="tooltip" data-placement="bottom" title="Message">
                    <i class='bx bx-message'></i>
                </a>
            </li>

            <li class="nav-item">
                <a href="app-calendar.html" class="nav-link" data-bs-toggle="tooltip" data-placement="bottom" title="Calendar">
                    <i class='bx bx-calendar'></i>
                </a>
            </li>

            <li class="nav-item">
                <a href="app-todo.html" class="nav-link" data-bs-toggle="tooltip" data-placement="bottom" title="Todo List">
                    <i class='bx bx-edit'></i>
                </a>
            </li>

            <li class="nav-item dropdown apps-box">
                <button class="nav-link dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class='bx bxs-grid'></i>
                </button>

                <div class="dropdown-menu">
                    <div class="dropdown-header d-flex justify-content-between align-items-center">
                        <span class="title d-inline-block">Web Apps</span>
                        <span class="edit-btn d-inline-block">Edit</span>
                    </div>

                    <div class="dropdown-body">
                        <div class="d-flex flex-wrap align-items-center">
                            <a href="#" class="dropdown-item">
                                <img src="{{ asset('assets/img/icon-account.png') }}" alt="image">
                                <span class="d-block mb-0">Account</span>
                            </a>

                            <a href="#" class="dropdown-item">
                                <img src="{{ asset('assets/img/icon-google.png') }}" alt="image">
                                <span class="d-block mb-0">Search</span>
                            </a>

                            <a href="#" class="dropdown-item">
                                <img src="{{ asset('assets/img/icon-map.png') }}" alt="image">
                                <span class="d-block mb-0">Maps</span>
                            </a>

                            <a href="#" class="dropdown-item">
                                <img src="{{ asset('assets/img/icon-youtube.png') }}" alt="image">
                                <span class="d-block mb-0">YouTube</span>
                            </a>

                            <a href="#" class="dropdown-item">
                                <img src="{{ asset('assets/img/icon-playstore.png') }}" alt="image">
                                <span class="d-block mb-0">Play</span>
                            </a>

                            <a href="#" class="dropdown-item">
                                <img src="{{ asset('assets/img/icon-gmail.png') }}" alt="image">
                                <span class="d-block mb-0">Gmail</span>
                            </a>

                            <a href="#" class="dropdown-item">
                                <img src="{{ asset('assets/img/icon-drive.png') }}" alt="image">
                                <span class="d-block mb-0">Drive</span>
                            </a>

                            <a href="#" class="dropdown-item">
                                <img src="{{ asset('assets/img/icon-calendar.png') }}" alt="image">
                                <span class="d-block mb-0">Calendar</span>
                            </a>
                        </div>
                    </div>

                    <div class="dropdown-footer">
                        <a href="#" class="dropdown-item">View All</a>
                    </div>
                </div>
            </li>
        </ul>

        <form class="nav-search-form d-none ms-auto d-md-block">
            <label><i class='bx bx-search'></i></label>
            <input type="text" class="form-control" placeholder="Search here...">
        </form>

        <ul class="navbar-nav right-nav align-items-center">
            <li class="nav-item">
                <a class="nav-link bx-fullscreen-btn" id="fullscreen-button">
                    <i class="bx bx-fullscreen"></i>
                </a>
            </li>

            <li class="nav-item dropdown language-switch-nav-item">
                <button class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img src="{{ asset('assets/img/us-flag.jpg') }}" alt="image">
                    <span>English <i class='bx bx-chevron-down'></i></span>
                </button>

                <div class="dropdown-menu">
                    <a href="#" class="dropdown-item d-flex justify-content-between align-items-center">
                        <span>German</span>

                        <img src="{{ asset('assets/img/germany-flag.jpg') }}" alt="flag">
                    </a>

                    <a href="#" class="dropdown-item d-flex justify-content-between align-items-center">
                        <span>French</span>

                        <img src="{{ asset('assets/img/france-flag.jpg') }}" alt="flag">
                    </a>

                    <a href="#" class="dropdown-item d-flex justify-content-between align-items-center">
                        <span>Spanish</span>

                        <img src="{{ asset('assets/img/spain-flag.jpg') }}" alt="flag">
                    </a>

                    <a href="#" class="dropdown-item d-flex justify-content-between align-items-center">
                        <span>Russian</span>

                        <img src="{{ asset('assets/img/russia-flag.jpg') }}" alt="flag">
                    </a>

                    <a href="#" class="dropdown-item d-flex justify-content-between align-items-center">
                        <span>Italian</span>

                        <img src="{{ asset('assets/img/italy-flag.jpg') }}" alt="flag">
                    </a>
                </div>
            </li>

            <li class="nav-item message-box dropdown">
                <button class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <div class="message-btn">
                        <i class='bx bx-envelope'></i>

                        <span class="badge bg-primary">4</span>
                    </div>
                </button>

                <div class="dropdown-menu">
                    <div class="dropdown-header d-flex justify-content-between align-items-center">
                        <span class="title d-inline-block">4 New Message</span>
                        <span class="clear-all-btn d-inline-block">Clear All</span>
                    </div>

                    <div class="dropdown-body">
                        <a href="#" class="dropdown-item d-flex align-items-center">
                            <div class="figure">
                                <img src="{{ asset('assets/img/user1.jpg') }}" class="rounded-circle" alt="image">
                            </div>

                            <div class="content d-flex justify-content-between align-items-center">
                                <div class="text">
                                    <span class="d-block">Sarah Taylor</span>
                                    <p class="sub-text mb-0">UX/UI design</p>
                                </div>
                                <p class="time-text mb-0">2 sec ago</p>
                            </div>
                        </a>

                        <a href="#" class="dropdown-item d-flex align-items-center">
                            <div class="figure">
                                <img src="{{ asset('assets/img/user2.jpg') }}" class="rounded-circle" alt="image">
                            </div>

                            <div class="content d-flex justify-content-between align-items-center">
                                <div class="text">
                                <span class="d-block">Lucy Eva</span>
                                    <p class="sub-text mb-0">Web developers</p>
                                </div>
                                <p class="time-text mb-0">5 sec ago</p>
                            </div>
                        </a>

                        <a href="#" class="dropdown-item d-flex align-items-center">
                            <div class="figure">
                                <img src="{{ asset('assets/img/user3.jpg') }}" class="rounded-circle" alt="image">
                            </div>

                            <div class="content d-flex justify-content-between align-items-center">
                                <div class="text">
                                <span class="d-block">James Anderson</span>
                                    <p class="sub-text mb-0">Content whitter</p>
                                </div>
                                <p class="time-text mb-0">3 min ago</p>
                            </div>
                        </a>

                        <a href="#" class="dropdown-item d-flex align-items-center">
                            <div class="figure">
                                <img src="{{ asset('assets/img/user4.jpg') }}" class="rounded-circle" alt="image">
                            </div>

                            <div class="content d-flex justify-content-between align-items-center">
                                <div class="text">
                                <span class="d-block">Steven Smith</span>
                                    <p class="sub-text mb-0">Digital marketing</p>
                                </div>
                                <p class="time-text mb-0">7 min ago</p>
                            </div>
                        </a>
                    </div>

                    <div class="dropdown-footer">
                        <a href="#" class="dropdown-item">View All</a>
                    </div>
                </div>
            </li>

            <li class="nav-item notification-box dropdown">
                <button class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <div class="notification-btn">
                        <i class='bx bx-bell'></i>

                        <span class="badge bg-secondary">5</span>
                    </div>
                </button>

                <div class="dropdown-menu">
                    <div class="dropdown-header d-flex justify-content-between align-items-center">
                        <span class="title d-inline-block">6 New Notifications</span>
                        <span class="mark-all-btn d-inline-block">Mark all as read</span>
                    </div>

                    <div class="dropdown-body">
                        <a href="#" class="dropdown-item d-flex align-items-center">
                            <div class="icon">
                                <i class='bx bx-message-rounded-dots'></i>
                            </div>

                            <div class="content">
                                <span class="d-block">Just sent a new message!</span>
                                <p class="sub-text mb-0">2 sec ago</p>
                            </div>
                        </a>

                        <a href="#" class="dropdown-item d-flex align-items-center">
                            <div class="icon">
                                <i class='bx bx-user'></i>
                            </div>

                            <div class="content">
                                <span class="d-block">New customer registered</span>
                                <p class="sub-text mb-0">5 sec ago</p>
                            </div>
                        </a>

                        <a href="#" class="dropdown-item d-flex align-items-center">
                            <div class="icon">
                                <i class='bx bx-layer'></i>
                            </div>

                            <div class="content">
                                <span class="d-block">Apps are ready for update</span>
                                <p class="sub-text mb-0">3 min ago</p>
                            </div>
                        </a>

                        <a href="#" class="dropdown-item d-flex align-items-center">
                            <div class="icon">
                                <i class='bx bx-hourglass'></i>
                            </div>

                            <div class="content">
                                <span class="d-block">Your item is shipped</span>
                                <p class="sub-text mb-0">7 min ago</p>
                            </div>
                        </a>

                        <a href="#" class="dropdown-item d-flex align-items-center">
                            <div class="icon">
                                <i class='bx bx-comment-dots'></i>
                            </div>

                            <div class="content">
                                <span class="d-block">Steven commented on your post</span>
                                <p class="sub-text mb-0">1 sec ago</p>
                            </div>
                        </a>
                    </div>

                    <div class="dropdown-footer">
                        <a href="#" class="dropdown-item">View All</a>
                    </div>
                </div>
            </li>

            <li class="nav-item dropdown profile-nav-item">
                <button href="#" class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <div class="menu-profile">
                        <span class="name">Hola! {{ auth()->user()->name }}</span>
                        <img src="{{ asset('assets/img/user1.jpg') }}" class="rounded-circle" alt="image">
                    </div>
                </button>

                <div class="dropdown-menu">
                    <div class="dropdown-header d-flex flex-column align-items-center">
                        <div class="figure mb-3">
                            <img src="{{ asset('assets/img/user1.jpg') }}" class="rounded-circle" alt="image">
                        </div>

                        <div class="info text-center">
                            <span class="name">{{ auth()->user()->name }}</span>
                            <span class="badge bg-primary">{{ auth()->user()->getRoleNames()[0] ? 'Consumidor' : 'No especificado' }}</span>
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
                                <a href="#" class="nav-link">
                                    <i class='bx bx-envelope'></i> <span>{{ __('Mensajes') }}</span>
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