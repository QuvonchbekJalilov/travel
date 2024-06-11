<div class="main-menu">
    <!-- Brand Logo -->
    <div class="logo-box">
        <!-- Brand Logo Light -->
        <a href="{{ route('dashboard')}}" class="logo-light">
            <img src="/frontend/images/MiracleTourLogo.png" alt="logo" class="logo-lg" height="45">
            <img src="/frontend/images/MiracleTourLogo.png" alt="small logo" class="logo-sm" height="45">
        </a>

        <!-- Brand Logo Dark -->
        <a href="index.html" class="logo-dark">
            <img src="/frontend/images/MiracleTourLogo.png" alt="dark logo" class="logo-lg" height="28">
            <img src="/frontend/images/MiracleTourLogo.png" alt="small logo" class="logo-sm" height="28">
        </a>
    </div>

    <!--- Menu -->
    <div data-simplebar>
        <ul class="app-menu">

            <li class="menu-title">Menu</li>

            <li class="menu-item">
                <a href="{{ route('index')}}" class="menu-link waves-effect waves-light">
                    <span class="menu-icon"><i class="bx bx-home-smile"></i></span>
                    <span class="menu-text"> Frontend side </span>
                </a>
            </li>

            

            <li class="menu-item">
                <a href="{{ route('news.index')}}" class="menu-link waves-effect waves-light">
                    <span class="menu-icon"><i class="bx bx-calendar"></i></span>
                    <span class="menu-text"> Yangiliklar </span>
                </a>
            </li>

            <li class="menu-item">
                <a href="{{ route('about.index')}}" class="menu-link waves-effect waves-light">
                    <span class="menu-icon"><i class="bx bx-calendar"></i></span>
                    <span class="menu-text"> Biz Haqimizda </span>
                </a>
            </li>

            <li class="menu-item">
                <a href="{{ route('tour.index')}}" class="menu-link waves-effect waves-light">
                    <span class="menu-icon"><i class="bx bx-calendar"></i></span>
                    <span class="menu-text"> Tour Paketlar </span>
                </a>
            </li>
            <li class="menu-item">
                <a href="{{ route('review.index')}}" class="menu-link waves-effect waves-light">
                    <span class="menu-icon"><i class="bx bx-calendar"></i></span>
                    <span class="menu-text">Mijozlarimiz Fikrlari</span>
                </a>
            </li>
            <li class="menu-item">
                <a href="{{ route('faq.index')}}" class="menu-link waves-effect waves-light">
                    <span class="menu-icon"><i class="bx bx-calendar"></i></span>
                    <span class="menu-text">Faq</span>
                </a>
            </li>
            <li class="menu-item">
                <a href="/admin/team" class="menu-link waves-effect waves-light">
                    <span class="menu-icon"><i class="bx bx-calendar"></i></span>
                    <span class="menu-text">Our Team</span>
                </a>
            </li>

            

            
        </ul>
    </div>
</div>



<!-- ============================================================== -->
<!-- Start Page Content here -->
<!-- ============================================================== -->

<div class="page-content">

    <!-- ========== Topbar Start ========== -->
    <div class="navbar-custom">
        <div class="topbar">
            <div class="topbar-menu d-flex align-items-center gap-lg-2 gap-1">

                <!-- Brand Logo -->
                <div class="logo-box">
                    <!-- Brand Logo Light -->
                    <a href="{{ route('index')}}" class="logo-light">
                        <img src="/assets/images/logo-light.png" alt="logo" class="logo-lg" height="22">
                        <img src="/assets/images/logo-sm.png" alt="small logo" class="logo-sm" height="22">
                    </a>

                    <!-- Brand Logo Dark -->
                    <a href="{{ route('index')}}" class="logo-dark">
                        <img src="/assets/images/logo-dark.png" alt="dark logo" class="logo-lg" height="22">
                        <img src="/assets/images/logo-sm.png" alt="small logo" class="logo-sm" height="22">
                    </a>
                </div>

                <!-- Sidebar Menu Toggle Button -->
                <button class="button-toggle-menu">
                    <i class="mdi mdi-menu"></i>
                </button>
            </div>

            <ul class="topbar-menu d-flex align-items-center gap-4">

                <li class="d-none d-md-inline-block">
                    <a class="nav-link" href="" data-bs-toggle="fullscreen">
                        <i class="mdi mdi-fullscreen font-size-24"></i>
                    </a>
                </li>

                

                <li class="nav-link" id="theme-mode">
                    <i class="bx bx-moon font-size-24"></i>
                </li>

                <li class="dropdown">
                    <a class="nav-link dropdown-toggle nav-user me-0 waves-effect waves-light" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                        <span class="ms-1 d-none d-md-inline-block">
                            {{auth()->user()->name}}<i class="mdi mdi-chevron-down"></i>
                        </span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end profile-dropdown text-center">

                            <i class="fe-log-out"></i>
                            <span>
                                <form method="post" action="{{ route('logout') }}">
                                    @csrf
                                    <button class=" btn btn-danger menu-text">Log Out</button>
                                </form>
                            </span>

                    </div>
                </li>

            </ul>
        </div>
    </div>
    <!-- ========== Topbar End ========== -->