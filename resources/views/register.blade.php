<!doctype html>
<html lang="en">

<head>
    <title>Register</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" />
    <link rel="stylesheet" href="{{ asset('assets/estilos.css') }}">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
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
                                        <img src="{{ asset('assets/logo.jpg') }}" style="width: 185px;" alt="logo">
                                        <h4 class="mt-1 mb-5 pb-1" style="font-style: italic;">Turista sin maps</h4>
                                    </div>

                                    <form action="/register" method="POST" class="needs-validation" novalidate>
                                        @csrf
                                    
                                        <p class="text-center fw-bold fs-5">¡Bienvenido! Por favor, ingrese sus datos :D</p>
                                    
                                        <!-- Nombre -->
                                        <div class="mb-3">
                                            <label for="txtnamereg" class="form-label">
                                                <i class="fas fa-user fa-fw me-2"></i>Nombre
                                            </label>
                                            <input type="text" id="txtnamereg" name="txtnamereg" class="form-control"
                                                placeholder="Ingresa tu nombre" value="{{ old('txtnamereg') }}">
                                            <small class="fst-italic text-danger">{{$errors->first('txtnamereg')}}</small>
                                        </div>
                                    
                                        <!-- Apellido -->
                                        <div class="mb-3">
                                            <label for="txtapellidoreg" class="form-label">
                                                <i class="fas fa-user fa-fw me-2"></i>Apellido
                                            </label>
                                            <input type="text" id="txtapellidoreg" name="txtapellidoreg" class="form-control"
                                                placeholder="Ingresa tu apellido" value="{{ old('txtapellidoreg') }}">
                                            <small class="fst-italic text-danger">{{$errors->first('txtapellidoreg')}}</small>
                                        </div>
                                    
                                        <!-- Correo -->
                                        <div class="mb-3">
                                            <label for="txtemailreg" class="form-label">
                                                <i class="fas fa-envelope fa-fw me-2"></i>Correo
                                            </label>
                                            <input type="email" id="txtemailreg" name="txtemailreg" class="form-control"
                                                placeholder="Ingresa tu correo electrónico" value="{{ old('txtemailreg') }}">
                                            <small class="fst-italic text-danger">{{$errors->first('txtemailreg')}}</small>
                                        </div>
                                    
                                        <!-- Teléfono -->
                                        <div class="mb-3">
                                            <label for="txttelreg" class="form-label">
                                                <i class="fas fa-phone fa-fw me-2"></i>Teléfono
                                            </label>
                                            <input type="tel" id="txttelreg" name="txttelreg" class="form-control"
                                                placeholder="Ingresa tu número de teléfono" value="{{ old('txttelreg') }}">
                                            <small class="fst-italic text-danger">{{$errors->first('txttelreg')}}</small>
                                        </div>
                                    
                                        <!-- Contraseña -->
                                        <div class="mb-3">
                                            <label for="txtpasswordreg" class="form-label">
                                                <i class="fas fa-lock fa-fw me-2"></i>Contraseña
                                            </label>
                                            <input type="password" id="txtpasswordreg" name="txtpasswordreg" class="form-control"
                                                placeholder="Ingresa tu contraseña" value="{{ old('txtpasswordreg') }}">
                                            <small class="fst-italic text-danger">{{$errors->first('txtpasswordreg')}}</small>
                                        </div>
                                    
                                        <!-- Botón de registro -->
                                        <div class="d-flex justify-content-center mt-4">
                                            <button type="submit" class="btn btn-primary btn-lg w-100">
                                                <i class="fas fa-user-plus me-2"></i>Registrarse
                                            </button>
                                        </div>
                                    </form>
                                    

                                </div>
                            </div>
                            <div class="col-lg-6 d-flex align-items-center gradient-custom-2">
                                <div class="text-white px-3 py-4 p-md-5 mx-md-4">
                                    <h4 class="mb-4">Registro</h4>
                                    <p class="small mb-0">Ingrese sus datos para crear su cuenta</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQ+zqX6gSbd85u4mG4QzX+"
        crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
        crossorigin="anonymous"></script>
</body>

</html>