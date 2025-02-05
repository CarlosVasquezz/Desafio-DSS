<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Título de tu página</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/styles.css') }}">
</head>

<body>

    <section class="h-100 gradient-form" style="background-color: #eee;">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-xl-10">
                    <div class="card rounded-3 text-black">
                        <div class="row g-0">
                            <div class="col-lg-6">
                                <div class="card-body p-md-5 mx-md-4">

                                    <div class="text-center">
                                        <img src="https://i.pinimg.com/originals/d9/c8/4a/d9c84abcf4b69b73c59b1c28682f47cd.png"
                                            style="width: 185px;" alt="logo">
                                        <h4 class="mt-1 mb-5 pb-1">Bienvenido</h4>
                                    </div>

                                    <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
                                        @csrf
                                        <p>Crea una cuenta</p>

                                        <div data-mdb-input-init class="form-outline mb-4">
                                            <label class="form-label" for="form2Example11">Nombre</label>
                                            <input type="text" name="name" id="form2Example11"
                                                class="form-control" placeholder="Ingresa nombre" />
                                        </div>

                                        <div data-mdb-input-init class="form-outline mb-4">
                                            <label class="form-label" for="form2Example11">Correo electrónico</label>
                                            <input type="email" name="email" id="form2Example11"
                                                class="form-control" placeholder="Ingresa tu correo electrónico" />
                                        </div>

                                        <div data-mdb-input-init class="form-outline mb-4">
                                            <label class="form-label" for="form2Example22">Contraseña</label>
                                            <input type="password" name="password" id="form2Example22"
                                                class="form-control" />
                                        </div>

                                        <div data-mdb-input-init class="form-outline mb-4">
                                            <label class="form-label" for="form2Example22">Confirmar Contraseña</label>
                                            <input type="password" name="password_confirmation" id="form2Example22"
                                                class="form-control" />
                                        </div>

                                        <div class="text-center pt-1 mb-5 pb-1">
                                            <button data-mdb-button-init data-mdb-ripple-init
                                                class="btn btn-primary btn-block fa-lg gradient-custom-2 mb-3"
                                                type="submit">Registrarse</button>
                                        </div>

                                        <div class="d-flex align-items-center justify-content-center pb-4">
                                            <p class="mb-0 me-2">¿Ya tienes una cuenta?</p>
                                            <a href="{{ route('login') }}" class="btn btn-outline-danger">Iniciar
                                                Sesión</a>
                                        </div>
                                    </form>

                                </div>
                            </div>
                            <div class="col-lg-6 d-flex align-items-center gradient-custom-2">
                                <div class="text-white px-3 py-4 p-md-5 mx-md-4">
                                    <h4 class="mb-4">Somos más que una empresa</h4>
                                    <p class="small mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed
                                        do eiusmod
                                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                        quis nostrud
                                        exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Bootstrap JS y dependencias opcionales -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
</body>

</html>
