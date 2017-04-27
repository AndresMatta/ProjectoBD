@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Cursos</div>

                <div class="panel-body">
                    <h5>Cursos en el sistema:</h5>
                    <ul>
                        @foreach($grades as $grade)
                            <li>{{ $grade->name}}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
