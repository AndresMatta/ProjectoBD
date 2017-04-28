@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Aulas</div>

                <div class="panel-body">
                    <h5>Aulas en el sistema:</h5>
                    <ul>
                        @foreach($classrooms as $classroom)
                            <li>{{ $classroom->cod}}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
