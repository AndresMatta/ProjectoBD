@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Añadir un aula nueva</div>

                <div class="panel-body">
                    <form method="POST" action="/classrooms">
                        {{ csrf_field() }}

                        <div class="form-group">
                           <label for="cod">Código del Aula: </label>
                           <input type="text" class="form-control" value="{{ old('cod') }}" id="cod" name="cod" placeholder="Ingrese la código" required>
                       </div>

                      <div class="form-group">
                         <label for="floor">Piso del edificio donde se ubica: </label>
                          <select name="floor" id="floor"  class="form-control" required>
                              <option value="">Elija uno...</option>
                                <option value="1" {{ old('floor') == 1 ? 'selected' : '' }}>
                                    Primer piso
                                </option>
                                <option value="2" {{ old('floor') == 2 ? 'selected' : '' }}>
                                    Segundo piso
                                </option>
                                <option value="3" {{ old('floor') == 3 ? 'selected' : '' }}>
                                    Tercer piso
                                </option>
                          </select>
                      </div>

                       <div class="form-group">
                           <label for="number_of_desks">Pupitres disponibles: </label>
                           <input type="number" class="form-control" value="{{ old('number_of_desks') }}" id="number_of_desks" name="number_of_desks" placeholder="Ingrese la cantidad de pupitres que posee el salón" required>
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
