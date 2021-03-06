<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{route('home')}}">
        <div class="sidebar-brand-icon">
            <img src="{{asset('public/media/img/planta.png')}}" width="50px" alt="">
        </div>
        <div class="sidebar-brand-text mx-3">planta Med<sup>contact</sup></div>
    </a>
    <!-- Divider -->
    <hr class="sidebar-divider my-0">
    <!-- Nav Item - Dashboard -->
    <li class="nav-item {{ (request()->is('/')) ? 'active' : '' }}">
        <a class="nav-link" href="{{route('home')}}">
            <i class="fas fa-home"></i>
            <span>Panel principal</span></a>
    </li>
    @can('collaborators.index')
        <!-- Divider -->
        <hr class="sidebar-divider">
        <!-- Heading -->
        <div class="sidebar-heading">
            Principal
        </div>
    @endcan
    @can('collaborators.index')
        <li class="nav-item {{ (request()->is('collaborators*')) ? 'active' : '' }}">
            <a class="nav-link" href="{{route('collaborators.index')}}">
                <i class="fas fa-fw fa-table"></i>
                <span>Colaboradores</span>
            </a>
        </li>
    @endcan

    {{--  Super Administrador --}}
    @can("users.index" || "roles.index")
        <hr class="sidebar-divider">
        <!-- Heading -->
        <div class="sidebar-heading">
            Super Administrador
        </div>

        <!-- Nav Item - Pages Collapse Menu -->
        <li class="nav-item {{ (request()->is('users*') || request()->is('roles*')) ? 'active' : '' }}">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseAdministrador"
                aria-expanded="true" aria-controls="collapseAdministrador">
                <i class="fas fa-user-tie"></i>
                <span>Super Administrador</span>
            </a>
            <div id="collapseAdministrador" class="collapse {{ (request()->is('users*') || request()->is('roles*')) ? 'show' : '' }}" aria-labelledby="headingAdministrador" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Gestionar usuarios:</h6>
                    <a class="collapse-item {{ (request()->is('users*')) ? 'active' : '' }}" href="{{route('users.index')}}">Usuarios</a>
                    <a class="collapse-item {{ (request()->is('roles*')) ? 'active' : '' }}" href="{{route('roles.index')}}">Roles</a>
                </div>
            </div>
        </li>
    @endcan

    <!-- Nav Item - Utilities Collapse Menu -->
    {{--li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
            aria-expanded="true" aria-controls="collapseUtilities">
            <i class="fas fa-fw fa-wrench"></i>
            <span>Utilities</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
            data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Custom Utilities:</h6>
                <a class="collapse-item" href="utilities-color.html">Colors</a>
                <a class="collapse-item" href="utilities-border.html">Borders</a>
                <a class="collapse-item" href="utilities-animation.html">Animations</a>
                <a class="collapse-item" href="utilities-other.html">Other</a>
            </div>
        </div>
    </li> --}}

    <!-- Divider -->
    {{-- <hr class="sidebar-divider"> --}}

    <!-- Heading -->
    {{-- <div class="sidebar-heading">
        Addons
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item active">
        <a class="nav-link" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true"
            aria-controls="collapsePages">
            <i class="fas fa-fw fa-folder"></i>
            <span>Pages</span>
        </a>
        <div id="collapsePages" class="collapse show" aria-labelledby="headingPages"
            data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Login Screens:</h6>
                <a class="collapse-item" href="login.html">Login</a>
                <a class="collapse-item" href="register.html">Register</a>
                <a class="collapse-item" href="forgot-password.html">Forgot Password</a>
                <div class="collapse-divider"></div>
                <h6 class="collapse-header">Other Pages:</h6>
                <a class="collapse-item" href="404.html">404 Page</a>
                <a class="collapse-item active" href="blank.html">Blank Page</a>
            </div>
        </div>
    </li>

    <!-- Nav Item - Charts -->
    <li class="nav-item">
        <a class="nav-link" href="charts.html">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Charts</span></a>
    </li>

    <!-- Nav Item - Tables -->
    <li class="nav-item">
        <a class="nav-link" href="tables.html">
            <i class="fas fa-fw fa-table"></i>
            <span>Tables</span></a>
    </li> --}}

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
<!-- End of Sidebar -->