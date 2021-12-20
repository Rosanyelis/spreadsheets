@extends('layouts.app')
@section('contenido')
    <div class="row">
        <div class="col-md-12 grid-margin">
            <div class="row">
                <div class="col-10 col-xl-10 mb-4 mb-xl-0">
                    <h2 class="font-weight-bold">Editar Usuario</h2>
                </div>
                <div class="col-2 col-xl-2">
                    <a href="{{ url('usuarios') }}" class="btn btn-dark font-weight-bold ml-5"> <i
                            class="ti-arrow-left"></i> Regresar</a>
                </div>
            </div>
            <div class="card mt-3">
                <div class="card-body">
                    <form class="forms-sample" method="post" action="{{ url('usuarios/'.$user->id.'/actualizar-usuario') }}">
                        @csrf
                        <div class="form-group">
                            <label for="exampleInputName1">Nombre de Usuario</label>
                            <input type="text" name="name" class="form-control @error('name') is-invalid @enderror"
                                id="exampleInputName1" value="{{ $user->name }}" placeholder="Ejm: Jon Doe">
                            @if ($errors->has('name'))
                                <small class="form-text text-danger">{{ $errors->first('name') }}</small>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail3">Correo Electrónico</label>
                            <input type="email" name="email" class="form-control @error('email') is-invalid @enderror"
                                id="exampleInputEmail3" value="{{ $user->email }}" placeholder="Ejm: example@example.com">
                            @if ($errors->has('email'))
                                <small class="form-text text-danger">{{ $errors->first('email') }}</small>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword4">Password</label>
                            <input type="password" name="password"
                                class="form-control @error('password') is-invalid @enderror" id="exampleInputPassword4"
                                placeholder="***********">
                            @if ($errors->has('password'))
                                <small class="form-text text-danger">{{ $errors->first('password') }}</small>
                            @endif
                        </div>
                        <div class="d-flex flex-row-reverse">
                            <button type="submit" class="btn btn-primary mr-2">Actualizar Registro</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
