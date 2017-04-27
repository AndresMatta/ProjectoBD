@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Profesores</div>

                <div class="panel-body">
                    <h5>Profesores en el Sistema:</h5>
                    <ul>
                        @foreach($teachers as $teacher)
                            <li>{{ $teacher->name}}  {{ $teacher->last_name}}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
