@extends('layouts.app')
@section('contenido')
    <div class="row">
        <div class="col-md-12 grid-margin">
            <div class="row">
                <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                    <h2 class="font-weight-bold">Generar Planilla</h2>
                </div>
            </div>
            <div class="card mt-2">
                <div class="card-body">
                    <div class="card-title">Datos Personales</div>
                    <form method="POST" action="{{ url('/reporte-detallado-generar') }}">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Razón Social</label>
                                    <input type="text" name="razon_social"
                                        class="form-control form-control-sm @error('razon_social') is-invalid @enderror"
                                        value="{{ old('razon_social') }}">
                                    @if ($errors->has('razon_social'))
                                        <small class="form-text text-danger">{{ $errors->first('razon_social') }}</small>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Número de DNI</label>
                                    <input type="text" name="dni"
                                        class="form-control form-control-sm @error('dni') is-invalid @enderror"
                                        value="{{ old('dni') }}">
                                    @if ($errors->has('dni'))
                                        <small class="form-text text-danger">{{ $errors->first('dni') }}</small>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-check form-check-primary">
                                    <label class="form-check-label">
                                        <input type="checkbox" id="exampleCheck1" class="form-check-input" name="pension" value="1">
                                        Planilla con pensión
                                        <i class="input-helper"></i>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div id="sinPension" class="mt-3">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>EPS</label>
                                        <input type="text"
                                            class="form-control form-control-sm @error('eps1') is-invalid @enderror"
                                            name="eps1" value="{{ old('eps1') }}" id="eps">
                                        @if ($errors->has('eps1'))
                                            <small class="form-text text-danger">{{ $errors->first('eps1') }}</small>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>ARL</label>
                                        <input type="text"
                                            class="form-control form-control-sm @error('arl1') is-invalid @enderror"
                                            name="arl1" value="{{ old('arl1') }}" id="arl">
                                        @if ($errors->has('arl1'))
                                            <small class="form-text text-danger">{{ $errors->first('arl1') }}</small>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="conPension" class="mt-3">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>EPS</label>
                                        <input type="text"
                                            class="form-control form-control-sm @error('eps') is-invalid @enderror"
                                            name="eps" value="{{ old('eps') }}" id="eps">
                                        @if ($errors->has('eps'))
                                            <small class="form-text text-danger">{{ $errors->first('eps') }}</small>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>AFP</label>
                                        <input type="text"
                                            class="form-control form-control-sm @error('afp') is-invalid @enderror"
                                            name="afp" value="{{ old('afp') }}" id="arl">
                                        @if ($errors->has('afp'))
                                            <small class="form-text text-danger">{{ $errors->first('afp') }}</small>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="conPension2" class="mt-3">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>ARL</label>
                                        <input type="text"
                                            class="form-control form-control-sm @error('arl') is-invalid @enderror"
                                            name="arl" value="{{ old('arl') }}" id="arl">
                                        @if ($errors->has('arl'))
                                            <small class="form-text text-danger">{{ $errors->first('arl') }}</small>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-dark btn-lg btn-block">Aportes en línea</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
<script src="{{ asset('vendors/sweetalert/sweetalert.min.js') }}"></script>
<script>
    (function($) {
        $('#conPension').hide();
        $('#conPension2').hide();
        $("#exampleCheck1").on("change", function() {
            if ($('#exampleCheck1').is(':checked')) {
                $('#sinPension').hide();
                $('#conPension').show();
                $('#conPension2').show();
            } else {
                $('#conPension').hide();
                $('#conPension2').hide();
                $('#sinPension').show();
            }
        });
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
    })(jQuery);
</script>

@endsection