@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Panel de Curso</div>

                <div class="panel-body">
                    <ul>
                        <h3>{{ $grade->name }}</h3>
                        <p>El tutor a cargo del curso es el profesor: {{ $grade->teacher->name}} {{ $grade->teacher->last_name}}</p>
                        @if(count($grade->subjects) > 0)
                        <h4>Asignaturas impartidas </h4>
                        @foreach($grade->subjects as $subject)
                            <li>
                            {{ $subject->name }} 
                            <a href="/records/{{ $subject->id }}">Ver Materia</a><span class="fa fa-address-book-o"></span>
                            </li>                            
                        @endforeach
                        @endif    
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection