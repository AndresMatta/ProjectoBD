@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Formulario de Asignaturas</div>

                <div class="panel-body">
                    <form method="POST" action="/subjects">
                        {{ csrf_field() }}

                        <div class="form-group">
                           <label for="last_name">Código de la Asignatura: </label>
                           <input type="text" class="form-control" value="{{ old('cod') }}" id="cod" name="cod" placeholder="Ingrese la código" required>
                       </div>

                       <div class="form-group">
                           <label for="name">Nombre: </label>
                           <input type="text" class="form-control" value="{{ old('name') }}" id="name" name="name" placeholder="Ingrese el nombre del curso" required>
                       </div>

                       <div class="form-group">
                           <label for="hours_per_week">Horas por semana: </label>
                           <input type="number" class="form-control" value="{{ old('hours_per_week') }}" id="hours_per_week" name="hours_per_week" placeholder="Ingrese la cantidad de horas cursadas por semana" required>
                       </div>
                        
                        <div class="form-group">
                         <label for="teacher_id">Profesor tutor: </label>
                          <select name="teacher_id" id="teacher_id"  class="form-control" required>
                              <option value="">Elija uno...</option>
                              @foreach($teachers as $teacher)
                                  <option value="{{ $teacher->id }}" {{ old('teacher_id') == $teacher->id ? 'selected' : '' }}>
                                      {{ $teacher->name}} {{ $teacher->last_name }}
                                  </option>
                               @endforeach
                          </select>
                        </div>

                        <div class="form-group">
                         <label for="grade_id">¿Pertenece a algún curso? </label>
                          <select name="grade_id" id="grade_id"  class="form-control">
                              <option value="">Ninguno</option>
                              @foreach($grades as $grade)
                                  <option value="{{ $grade->id }}" {{ old('grade_id') == $grade->id ? 'selected' : '' }}>
                                      {{ $grade->name}}
                                  </option>
                               @endforeach
                          </select>
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
