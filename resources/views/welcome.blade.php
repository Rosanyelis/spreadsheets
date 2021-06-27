<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Reportes</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="#">Reportes</a>
        </nav>

        <div class="container mt-4">
            <form method="POST" action="{{ url('/reporte-detallado-generar') }}">
              @csrf
                <h3 class="mb-4">Datos Personales</h3>
                <div class="form-row">
                    <div class="form-group col-md-6">
                      <label for="razon_social">Razón Social</label>
                      <input type="text" name="razon_social" class="form-control @error('razon_social') is-invalid @enderror" id="razon_social"  value="{{ old('razon_social') }}">
                      @if ($errors->has('razon_social'))
                          <small class="form-text text-danger">{{ $errors->first('razon_social') }}</small>
                      @endif
                    </div>
                    <div class="form-group col-md-6">
                        <label for="dni">Número de DNI</label>
                        <input type="text" name="dni" value="{{ old('dni') }}" class="form-control @error('dni') is-invalid @enderror" id="dni">
                        @if ($errors->has('dni'))
                          <small class="form-text text-danger">{{ $errors->first('dni') }}</small>
                        @endif
                    </div>
                </div>
                
                <div class="form-group form-check">
                  <input type="checkbox" class="form-check-input" id="exampleCheck1" name="pension" value="1">
                  <label class="form-check-label" for="exampleCheck1">Planilla con pensión</label>
                </div>
                <div class="form-row" id="sinPension">
                  <div class="form-group col-md-6">
                      <label for="eps1">EPS</label>
                      <input type="text" name="eps1" value="{{ old('eps1') }}" class="form-control @error('eps') is-invalid @enderror" id="eps">
                      @if ($errors->has('eps1'))
                        <small class="form-text text-danger">{{ $errors->first('eps1') }}</small>
                      @endif
                  </div>
                  <div class="form-group col-md-6">
                    <label for="arl">ARL</label>
                    <input type="text" name="arl1" value="{{ old('arl1') }}" class="form-control @error('arl') is-invalid @enderror" id="arl">
                    @if ($errors->has('arl1'))
                      <small class="form-text text-danger">{{ $errors->first('arl1') }}</small>
                    @endif
                  </div>
                </div>


                <div class="form-row" id="conPension">
                  <div class="form-group col-md-6">
                      <label for="eps">EPS</label>
                      <input type="text" name="eps" value="{{ old('eps') }}" class="form-control @error('eps') is-invalid @enderror" id="eps">
                      @if ($errors->has('eps'))
                        <small class="form-text text-danger">{{ $errors->first('eps') }}</small>
                      @endif
                  </div>
                  <div class="form-group col-md-6">
                      <label for="afp">AFP</label>
                      <input type="text" name="afp" value="{{ old('afp') }}" class="form-control @error('afp') is-invalid @enderror" id="afp">
                      @if ($errors->has('afp'))
                        <small class="form-text text-danger">{{ $errors->first('afp') }}</small>
                      @endif
                  </div>
                </div>
                <div class="form-row" id="conPension2">
                  <div class="form-group col-md-6">
                      <label for="arl">ARL</label>
                      <input type="text" name="arl" value="{{ old('arl') }}" class="form-control @error('arl') is-invalid @enderror" id="arl">
                      @if ($errors->has('arl'))
                        <small class="form-text text-danger">{{ $errors->first('arl') }}</small>
                      @endif
                  </div>
                </div>
                <button type="submit" class="btn btn-info btn-lg btn-block mt-4">Generar Reporte</button>
              </form>
        </div>

        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
        <script>
          $(document).ready(function(){
            $('#conPension').hide(); 
            $('#conPension2').hide();
            $("#exampleCheck1").on( "change", function() {
              if ($('#exampleCheck1').is(':checked')){
                $('#sinPension').hide(); 
                $('#conPension').show(); 
                $('#conPension2').show();
              }else{
                $('#conPension').hide(); 
                $('#conPension2').hide();
                $('#sinPension').show();
              }
            });
           
            // if ( old('pension') == true) {
            //   $("#exampleCheck1").prop('checked', $(this).is(':checked'));
            //   $('#conPension').show(); 
            //   $('#conPension2').show();
            // }
          });
        </script>
    </body>
</html>
