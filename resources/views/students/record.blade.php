@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Panel de estudiante</div>

                <div class="panel-body">
                    <h4>{{ $record->student->name}}</h4>

                    <p>Este es el registro del estudiante en la asignatura de : {{ $record->subject->name}}</p>

                    <ul>
                        <p>Nota Final: {{ $record->score }}</p>

                        <p>Incidencias: {{ $record->incidences}}</p>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection