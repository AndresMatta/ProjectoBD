@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Formulario de Cursos</div>

                <div class="panel-body">
                    <form method="POST" action="/grades">
                        {{ csrf_field() }}

                        <div class="form-group">
                           <label for="last_name">Código del Curso: </label>
                           <input type="text" class="form-control" value="{{ old('cod') }}" id="cod" name="cod" placeholder="Ingrese la código" required>
                       </div>

                       <div class="form-group">
                           <label for="name">Nombre: </label>
                           <input type="text" class="form-control" value="{{ old('name') }}" id="name" name="name" placeholder="Ingrese el nombre del curso" required>
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
