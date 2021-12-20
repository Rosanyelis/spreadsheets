@extends('layouts.app')
@section('contenido')
    <div class="row">
        <div class="col-md-12 grid-margin">
            <div class="row">
                <div class="col-10 col-xl-10 mb-4 mb-xl-0">
                    <h2 class="font-weight-bold">Usuarios</h2>
                </div>
                <div class="col-2 col-xl-2">
                    <a href="{{ url('/usuarios/crear-usuario') }}" class="btn btn-primary font-weight-bold ml-4"> <i
                            class="ti-plus"></i> Crear Usuario</a>
                </div>
            </div>
            <div class="card mt-3">
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="order-listing" class="table table-striped">
                            <thead>
                                <tr>
                                    <th width="10px">Nro.</th>
                                    <th>
                                        Usuario
                                    </th>
                                    <th>
                                        Correo
                                    </th>
                                    <th>
                                        Estatus
                                    </th>
                                    <th width="30px">
                                        Acción
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($users as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>
                                            {{ $item->name }}
                                        </td>
                                        <td>
                                            {{ $item->email }}
                                        </td>
                                        <td>
                                            {{ $item->estatus }}
                                        </td>
                                        <td>
                                            <a href="{{ url('/usuarios/' . $item->id . '/editar-usuario') }}"
                                                class="btn btn-success btn-sm p-2 font-weight-bold"><i
                                                    class="ti-pencil-alt"></i> Editar</a>
                                            @if ($item->estatus == 'Inactivo')
                                                <button type="button" class="btn btn-warning btn-sm p-2 font-weight-bold"
                                                    onclick="showSwal2()"><i class="ti-trash"></i> Activar</button>
                                                <input type="hidden" id="UrlUserActive"
                                                    value="{{ url('/usuarios/' . $item->id . '/activar-usuario') }}">
                                                <form id="activarRegistro" method="post" action="">
                                                    @csrf
                                                </form>
                                            @endif
                                            @if ($item->estatus == 'Activo')
                                                <button type="button" class="btn btn-danger btn-sm p-2 font-weight-bold"
                                                    onclick="showSwal()"><i class="ti-trash"></i> Desactivar</button>
                                                <input type="hidden" id="UrlUser"
                                                    value="{{ url('/usuarios/' . $item->id . '/desactivar-usuario') }}">
                                                <form id="desactivarRegistro" method="post" action="">
                                                    @csrf
                                                    @method('DELETE')
                                                </form>
                                            @endif
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    <!-- Plugin js for this page -->
    <script src="{{ asset('vendors/datatables.net/jquery.dataTables.js') }}"></script>
    <script src="{{ asset('vendors/datatables.net-bs4/dataTables.bootstrap4.js') }}"></script>
    <script src="{{ asset('js/data-table.js') }}"></script>
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

            showSwal = function() {
                swal({
                    title: '¿Está seguro de desactivar al usuario?',
                    text: 'El usuario perderá acceso al sistema.',
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3f51b5',
                    cancelButtonColor: '#ff4081',
                    buttons: {
                        cancel: {
                            text: "Cancelar",
                            value: null,
                            visible: true,
                            className: "btn btn-danger",
                            closeModal: true,
                        },
                        confirm: {
                            text: "Sí, estoy seguro",
                            value: true,
                            visible: true,
                            className: "btn btn-primary",
                            closeModal: true
                        }
                    }
                }).then((result) => {
                    if (result == true) {
                        var url = $('#UrlUser').val();
                        $("#desactivarRegistro").attr("action", url);
                        $('#desactivarRegistro').submit();
                    }
                })
            }
            showSwal2 = function() {
                swal({
                    title: '¿Está seguro de activar al usuario?',
                    text: 'El usuario podrá tener acceso al sistema.',
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3f51b5',
                    cancelButtonColor: '#ff4081',
                    buttons: {
                        cancel: {
                            text: "Cancelar",
                            value: null,
                            visible: true,
                            className: "btn btn-danger",
                            closeModal: true,
                        },
                        confirm: {
                            text: "Sí, estoy seguro",
                            value: true,
                            visible: true,
                            className: "btn btn-primary",
                            closeModal: true
                        }
                    }
                }).then((result) => {
                    if (result == true) {
                        var url = $('#UrlUserActive').val();
                        $("#activarRegistro").attr("action", url);
                        $('#activarRegistro').submit();
                    }
                })
            }
        })(jQuery);
    </script>
@endsection
