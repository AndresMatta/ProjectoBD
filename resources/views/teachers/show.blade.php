@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Panel de Profesor</div>

                <div class="panel-body">
                    <ul>
                        <h4>Información Personal</h4>
                        <li>Número de cédula: {{ $teacher->dni }}</li>
                        <li>Nombre completo: {{ $teacher->name }} {{ $teacher->last_name }}</li>
                        <li>Fecha de nacimiento: {{ $teacher->birthdate}}</li>
                        <li>Número de contacto: {{ $teacher->phone }}</li>
                        <li>Código Postal: {{ $teacher->postal_code }}</li>
                        <li>Población: {{ $teacher->population }}</li>
                        <li>Dirección: {{ $teacher->address }}</li>
                    </ul>
                    <ul>
                        <h4>Asignaturas impartidas </h4>
                        @foreach($teacher->subjects as $subject)
                            <li>
                            {{ $subject->name }} 
                            <a href="/records/{{ $subject->id }}">Ver Materia</a><span class="fa fa-address-book-o"></span>
                            </li>                            
                        @endforeach    
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection