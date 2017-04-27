@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Formulario de Estudiante</div>

                <div class="panel-body">
                    <form method="POST" action="/students">
                        {{ csrf_field() }}

                        <div class="form-group">
                           <label for="last_name">Número de cédula: </label>
                           <input type="text" class="form-control" value="{{ old('dni') }}" id="dni" name="dni" placeholder="Ingrese la cédula" required>
                       </div>

                       <div class="form-group">
                           <label for="name">Nombre: </label>
                           <input type="text" class="form-control" value="{{ old('name') }}" id="name" name="name" placeholder="Ingrese el nombre del estudiante" required>
                       </div>

                       <div class="form-group">
                           <label for="last_name">Primer Apellido: </label>
                           <input type="text" class="form-control" value="{{ old('last_name') }}" id="last_name" name="last_name" placeholder="Ingrese el apellido del estudiante" required>
                       </div>
                        
                        <div class="form-group">
                           <label for="birthdate">Fecha de nacimiento: </label>
                           <input type="date" class="form-control" value="{{ old('birthdate') }}" id="birthdate" name="birthdate" required>
                       </div>

                       <div class="form-group">
                           <label for="phone">Número telefónico: </label>
                           <input type="tel" class="form-control" value="{{ old('phone') }}" id="phone" name="phone" placeholder="Ingrese el número de contacto" minlength="8" maxlength="8" required>
                       </div>

                       <div class="form-group">
                           <label for="population">Población: </label>
                           <input type="text" class="form-control" value="{{ old('population') }}" id="population" name="population" placeholder="Ingrese la población a la que pertenece el estudiante" required>
                       </div>

                       <div class="form-group">
                           <label for="postal_code">Código postal: </label>
                           <input type="text" class="form-control" value="{{ old('postal_code') }}" id="postal_code" name="postal_code" placeholder="Ingrese el código postal del estudiante" maxlength="5" minlength="5" required>
                       </div>

                       <div class="form-group">
                           <label for="address">Dirección exacta: </label>
                           <textarea class="form-control" id="address" name="address" placeholder="Ingrese la dirección de la residencia del estudiante" rows="8" required>{{ old('address') }}</textarea>
                       </div>
                        
                       <div class="form-group">
                           <button type="submit" class="btn btn-primary">Añadir</button>
                       </div>

                        @if(count($errors))
                        <ul class="alert alert-danger">
                            @foreach($errors->all() as $error)
                              <li>{{ $error }}</li> 
                            @endforeach
                        </ul>
                        @endif
                   </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
