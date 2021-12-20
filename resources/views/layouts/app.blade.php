<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>..:::: Certificaciones Generales Corp ::::..</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{ asset('vendors/feather/feather.css') }}">
    <link rel="stylesheet" href="{{ asset('vendors/ti-icons/css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('vendors/css/vendor.bundle.base.css') }}">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="{{ asset('vendors/datatables.net-bs4/dataTables.bootstrap4.css') }}">
    <link rel="stylesheet" href="{{ asset('vendors/ti-icons/css/themify-icons.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('js/select.dataTables.min.css') }}">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="{{ asset('css/vertical-layout-light/style.css') }}">
    <!-- endinject -->
    <link rel="shortcut icon" href="{{ asset('images/logo-mini.png') }}" />
</head>

<body>
    <div class="container-scroller">
        <!-- partial:partials/_navbar.html <img  alt="logo" style="width: 300px;">-->
        <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
            <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
                <a class="navbar-brand brand-logo mr-5" href="index.html"><img src="{{ asset('images/logo.png') }}"
                        class="mr-2" alt="logo"  /></a>
                <a class="navbar-brand brand-logo-mini" href="index.html"><img src="{{ asset('images/logo-mini.png') }}"
                        alt="logo" /></a>
            </div>
            <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
                <ul class="navbar-nav navbar-nav-right">
                    @if (Auth::user()->rol == 'AdminSystem')
                    <li class="nav-item">
                        <a class="nav-link" id="notificationDropdown" href="{{ url('usuarios') }}">
                            <i class="ti-user mx-0"></i> Usuarios
                        </a>
                    </li>
                    <li class="nav-item nav-profile dropdown">
                        <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
                            <img src="{{ asset('images/faces/face28.jpg') }}" alt="profile" /> &nbsp; &nbsp;{{ Auth::user()->name }}
                        </a>
                        <div class="dropdown-menu dropdown-menu-right navbar-dropdown"
                            aria-labelledby="profileDropdown">
                            <a href="{{ url('configuracion') }}" class="dropdown-item">
                                <i class="ti-settings text-primary"></i>
                                Configuración
                            </a>
                            <form method="post" action="{{ route('logout') }}">
                                <button class="dropdown-item">
                                    @csrf
                                    <i class="ti-power-off text-primary"></i>
                                    Cerrar Sesión
                                </button>
                            </form>
                        </div>
                    </li>
                    @elseif (Auth::user()->rol == 'Administrador')
                    <li class="nav-item">
                        <a class="nav-link" id="notificationDropdown" href="{{ url('usuarios') }}">
                            <i class="ti-user mx-0"></i> Usuarios
                        </a>
                    </li>
                    <li class="nav-item nav-profile dropdown">
                        <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
                            <img src="{{ asset('images/faces/face28.jpg') }}" alt="profile" /> &nbsp; &nbsp;{{ Auth::user()->name }}
                        </a>
                        <div class="dropdown-menu dropdown-menu-right navbar-dropdown"
                            aria-labelledby="profileDropdown">
                            <a href="{{ url('configuracion') }}" class="dropdown-item">
                                <i class="ti-settings text-primary"></i>
                                Configuración
                            </a>
                            <form method="post" action="{{ route('logout') }}">
                                <button class="dropdown-item">
                                    @csrf
                                    <i class="ti-power-off text-primary"></i>
                                    Cerrar Sesión
                                </button>
                            </form>
                        </div>
                    </li>
                    @elseif (Auth::user()->rol == 'Empleado')
                    <li class="nav-item nav-profile dropdown">
                        <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
                            <img src="{{ asset('images/faces/face28.jpg') }}" alt="profile" /> &nbsp; &nbsp;{{ Auth::user()->name }}
                        </a>
                        <div class="dropdown-menu dropdown-menu-right navbar-dropdown"
                            aria-labelledby="profileDropdown">
                            <form method="post" action="{{ route('logout') }}">
                                <button class="dropdown-item">
                                    @csrf
                                    <i class="ti-power-off text-primary"></i>
                                    Cerrar Sesión
                                </button>
                            </form>
                        </div>
                    </li>
                    @endif
                    
                </ul>
            </div>
        </nav>

        <div class="container-fluid page-body-wrapper">
            <div class="main-panel">
                <div class="content-wrapper">
                    @yield('contenido')
                </div>
                <!-- content-wrapper ends -->
                <!-- partial:partials/_footer.html -->
                <footer class="footer">
                    <div class="d-sm-flex justify-content-center justify-content-sm-between">
                        <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright ©
                            <script>
                                document.write(new Date().getFullYear())
                            </script>. All rights reserved.</span>
                    </div>
                </footer>
                <!-- partial -->
            </div>
            <!-- main-panel ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller --

    <!-- plugins:js -->
    <script src="{{ asset('vendors/js/vendor.bundle.base.js') }}"></script>
    <!-- endinject -->
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="{{ asset('js/hoverable-collapse.js') }}"></script>
    <script src="{{ asset('js/template.js') }}"></script>
    <!-- endinject -->
    @yield('scripts')
</body>

</html>
