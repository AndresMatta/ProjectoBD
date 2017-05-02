@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">{{ $subject->name }}</div>

                <div class="panel-body">
                    <ul>
                        <h4>Estudiantes matriculados: </h4>
                        @foreach($records as $record)
                            <li><a href="/records/{{ $subject->id }}/{{ $record->student->id }}">{{ $record->student->name}}</a></li>
                        @endforeach    
                    </ul>

                    <p>Esta materia es impartido por el profesor: {{ $subject->teacher->name }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection