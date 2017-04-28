@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Panel de Estudiante</div>

                <div class="panel-body">
                    <ul>
                        <h4>Información Personal</h4>
                        <li>Número de cédula: {{ $student->dni }}</li>
                        <li>Nombre completo: {{ $student->name }} {{ $student->last_name }}</li>
                        <li>Fecha de nacimiento: {{ $student->birthdate}}</li>
                        <li>Número de contacto: {{ $student->phone }}</li>
                        <li>Código Postal: {{ $student->postal_code }}</li>
                        <li>Población: {{ $student->population }}</li>
                        <li>Dirección: {{ $student->address }}</li>
                    </ul>
                    <ul>
                        <h4>Asignaturas matriculadas </h4>
                        @foreach($student->records as $record)
                            <li>
                            {{ $record->subject->name }} 
                            <a href="/records/{{ $record->subject->id }}/{{ $student->id }}">Ver Notas </a><span class="fa fa-address-book-o"></span>
                            </li>
                            
                        @endforeach    
                    </ul>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection