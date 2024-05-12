@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Editar Empleado</h2>
        <form method="POST" action="{{ route('empleados.update', $empleado->id) }}">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="nombre">Nombre:</label>
                <input type="text" class="form-control" id="nombre" name="nombre" value="{{ $empleado->nombre }}">
            </div>
            <div class="form-group">
                <label for="apellido">Apellido:</label>
                <input type="text" class="form-control" id="apellido" name="apellido" value="{{ $empleado->apellido }}">
            </div>
            <div class="form-group">
                <label for="correo_electronico">Correo Electrónico:</label>
                <input type="email" class="form-control" id="correo_electronico" name="correo_electronico" value="{{ $empleado->correo_electronico }}">
            </div>
            <div class="form-group">
                <label for="cargo">Cargo:</label>
                <input type="text" class="form-control" id="cargo" name="cargo" value="{{ $empleado->cargo }}">
            </div>
            <div class="form-group">
                <label for="salario">Salario:</label>
                <input type="number" class="form-control" id="salario" name="salario" value="{{ $empleado->salario }}">
            </div>
            <div class="mb-3">
                <label for="foto_perfil" class="form-label">Foto de Perfil</label>
                <input type="file" class="form-control" id="foto_perfil" name="foto_perfil">
                @if ($empleado->fotografia)
                    <img src="{{ asset('storage/' . $empleado->fotografia) }}" alt="Foto de Perfil Actual" class="mt-2" style="max-width: 200px;">
                @endif
            </div>
            <button type="submit" class="btn btn-primary">Actualizar Empleado</button>
        </form>
    </div>
@endsection
