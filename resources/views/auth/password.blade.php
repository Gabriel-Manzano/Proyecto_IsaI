<!doctype html>
<html lang="en">

<head>
    <title>Restablecimiento de Contraseña</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS v5.3.2 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />

    <link rel="stylesheet" href="{{ 'assets/estilos.css' }}">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body>

    <section class="h-100 gradient-form" style="background-color: #eee;">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-xl-6">
                    <div class="card rounded-3 text-black">
                        <div class="row g-0">
                            <div class="col-lg-12">
                                <div class="card-body p-md-5 mx-md-4">

                                    <div class="text-center">
                                        <img src="{{ 'assets/logo.jpg' }}" style="width: 185px;" alt="logo">
                                        <h4 class="mt-1 mb-5 pb-1" style="font-style: italic;">Restablecer Contraseña</h4>
                                    </div>

                                    <form action="/enviarPassword" method="POST">

                                        @csrf
                                        <p>Ingresa tu correo electrónico y te enviaremos las instrucciones para restablecer tu contraseña.</p>

                                        <div data-mdb-input-init class="form-outline mb-4">
                                            <input type="text" id="typeEmail" class="form-control my-3" placeholder="Correo electrónico" name="txtemailpsw" value="{{ old('txtemailpsw') }}">
                                            <label class="form-label" for="typeEmail">Correo Electrónico</label>
                                            <small class="fst-italic text-danger">{{$errors->first('txtemailpsw')}}</small>
                                        </div>

                                        <div class="text-center pt-1 mb-5 pb-1">
                                            <button data-mdb-button-init data-mdb-ripple-init
                                                class="btn btn-primary btn-block fa-lg gradient-custom-2 mb-3"
                                                type="submit">Restablecer Contraseña</button><br>
                                        </div>

                                        <div class="d-flex justify-content-between">
                                            <a href="{{route('login')}}">Iniciar Sesión</a>
                                            <a href="{{route('register')}}">Registrar</a>
                                        </div>

                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous">
    </script>
</body>

</html>
