@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Lista de Empleados</h2>
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        <table class="table">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Correo Electrónico</th>
                    <th>Cargo</th>
                    <th>Salario</th>
                    <th>Fotografía</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($empleados as $empleado)
                    <tr>
                        <td>{{ $empleado->nombre }}</td>
                        <td>{{ $empleado->apellido }}</td>
                        <td>{{ $empleado->correo_electronico }}</td>
                        <td>{{ $empleado->cargo }}</td>
                        <td>{{ $empleado->salario }}</td>
                        <td><img src="{{ asset($empleado->fotografia) }}" alt="Foto de perfil"></td>
                        <td>
                            <a href="{{ route('empleados.show', $empleado->id) }}" class="btn btn-info">Ver</a>
                            @if(Auth::user()->role === 'admin')
                                <a href="{{ route('empleados.edit', $empleado->id) }}" class="btn btn-primary">Editar</a>
                                <form action="{{ route('empleados.destroy', $empleado->id) }}" method="POST" style="display: inline-block;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger" onclick="return confirm('¿Estás seguro de que deseas eliminar este empleado?')">Eliminar</button>
                                </form>
                            @endif
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        @if(Auth::user()->role === 'admin')
            <a href="{{ route('empleados.create') }}" class="btn btn-success">Agregar Empleado</a>
        @endif
    </div>
@endsection
