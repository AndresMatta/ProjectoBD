@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Estudiantes</div>

                <div class="panel-body">
                    <h5>Estudiantes en el Sistema:</h5>
                    <ul>
                        @foreach($students as $student)
                            <li>{{ $student->name}}  {{ $student->last_name}}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
