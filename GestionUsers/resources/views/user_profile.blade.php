@extends('layouts.app')

@section('content')

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">Perfil de Usuario</h5>
                    </div>
                    <div class="card-body">
                        <p class="card-text"><strong>Nombre:</strong> {{ $user->name }}</p>
                        <p class="card-text"><strong>Apellido:</strong> {{ $user->apellido }}</p>
                        <p class="card-text"><strong>Correo Electrónico:</strong> {{ $user->email }}</p>
                        <p class="card-text"><strong>Cargo:</strong> {{ $user->cargo }}</p>
                        <p class="card-text"><strong>Salario:</strong> {{ $user->salario }}</p>
                        <p class="card-text"><strong>Fotografía:</strong></p>
                        <img src="{{ $user->fotografia }}" class="img-fluid" alt="Fotografía">
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
