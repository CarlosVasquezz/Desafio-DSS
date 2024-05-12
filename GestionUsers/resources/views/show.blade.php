@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Detalles del Empleado</h2>
        <div>
            <p><strong>Nombre:</strong> {{ $empleado->nombre }}</p>
            <p><strong>Apellido:</strong> {{ $empleado->apellido }}</p>
            <p><strong>Correo Electrónico:</strong> {{ $empleado->correo_electronico }}</p>
            <p><strong>Cargo:</strong> {{ $empleado->cargo }}</p>
            <p><strong>Salario:</strong> {{ $empleado->salario }}</p>
            <p><strong>Fotografía:</strong> {{ $empleado->fotografia }}</p>
        </div>
        <a href="{{ route('empleados.index') }}" class="btn btn-primary">Volver a la lista</a>
    </div>
@endsection
