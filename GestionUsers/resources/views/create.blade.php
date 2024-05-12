@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Crear Usuario y Empleado</div>
                    <div class="card-body">
                        <form action="{{ route('create.store') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="name">Nombre</label>
                                <input type="text" class="form-control" id="name" name="name" required>
                            </div>
                            <div class="form-group">
                                <label for="email">Correo Electrónico</label>
                                <input type="email" class="form-control" id="email" name="email" required>
                            </div>
                            <div class="form-group">
                                <label for="password">Contraseña</label>
                                <input type="password" class="form-control" id="password" name="password" required>
                            </div>
                            <div class="form-group">
                                <label for="password_confirmation">Confirmar Contraseña</label>
                                <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" required>
                            </div>
                            <div class="form-group">
                                <label for="role">Rol</label>
                                <select class="form-control" id="role" name="role" required>
                                    <option value="admin">Admin</option>
                                    <option value="user">User</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="nombre">Nombre del Empleado</label>
                                <input type="text" class="form-control" id="nombre" name="nombre" required>
                            </div>
                            <div class="form-group">
                                <label for="apellido">Apellido del Empleado</label>
                                <input type="text" class="form-control" id="apellido" name="apellido" required>
                            </div>
                            <div class="form-group">
                                <label for="correo_electronico_empleado">Correo Electrónico del Empleado</label>
                                <input type="email" class="form-control" id="correo_electronico_empleado" name="correo_electronico_empleado" required>
                            </div>
                            <div class="form-group">
                                <label for="cargo">Cargo del Empleado</label>
                                <input type="text" class="form-control" id="cargo" name="cargo" required>
                            </div>
                            <div class="form-group">
                                <label for="salario">Salario del Empleado</label>
                                <input type="number" class="form-control" id="salario" name="salario" required>
                            </div>
                            <button type="submit" class="btn btn-primary">Crear Usuario y Empleado</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
