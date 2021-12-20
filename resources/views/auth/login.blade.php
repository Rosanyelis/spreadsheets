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
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="{{ asset('css/vertical-layout-light/style.css') }}">
    <!-- endinject -->
    <link rel="shortcut icon" href="../../images/favicon.png" />
</head>

<body>
    <div class="container-scroller">
        <div class="container-fluid page-body-wrapper full-page-wrapper">
            <div class="login-wrapper d-flex align-items-center auth px-0">
                <div class="row w-100 mx-0">
                    <div class="col-lg-4 mx-auto">
                        <div class="auth-form-light text-left py-5 px-4 px-sm-5">
                            <div class="brand-logo text-center">
                                <img src="{{ asset('images/logo.png') }}" alt="logo" style="width: 300px;">
                            </div>
                            <form class="pt-3" method="POST" action="{{ url('logueo') }}">
                                @csrf
                                <div class="form-group">
                                    <input type="email" name="email" class="form-control form-control-sm" id="exampleInputEmail1"
                                        placeholder="Correo Electrónico" value="{{ old('email') }}" autofocus>
                                    @if ($errors->has('email'))
                                        <div class="text-danger">
                                            {{ $errors->first('email') }}
                                        </div>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control form-control-sm"
                                        id="exampleInputPassword1" placeholder="Password" name="password"
                                    >
                                    @if ($errors->has('password'))
                                        <div class="text-danger">
                                            {{ $errors->first('password') }}
                                        </div>
                                    @endif
                                </div>
                                <div class="my-2 d-flex justify-content-between align-items-center">
                                    <div class="form-check">
                                        <label class="form-check-label text-muted">
                                            <input type="checkbox" name="remember" class="form-check-input">
                                           Recuerdame
                                        </label>
                                    </div>
                                </div>
                                <div class="mt-3">
                                    <button type="submit" class="btn btn-block btn-primary btn-md font-weight-medium auth-form-btn">INICIAR SESIÓN</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- content-wrapper ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="{{ asset('vendors/js/vendor.bundle.base.js') }}"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="{{ asset('js/template.js') }}"></script>
    <script src="{{ asset('vendors/sweetalert/sweetalert.min.js') }}"></script>
    <script>
        (function($) {
            @if (session('success'))
                swal({
                title: 'Felicitaciones!',
                text: '{{ session('success') }}',
                icon: 'success',
                button: {
                text: "Continuar",
                value: true,
                visible: true,
                className: "btn btn-primary"
                }
                });
            @endif
            @if (session('danger'))
                swal({
                title: 'Oops!',
                text: '{{ session('danger') }}',
                icon: 'error',
                button: {
                text: "Continuar",
                value: true,
                visible: true,
                className: "btn btn-primary"
                }
                });
            @endif
        })(jQuery);
    </script>
    <!-- endinject -->
</body>

</html>