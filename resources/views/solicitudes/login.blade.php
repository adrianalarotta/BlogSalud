<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar sesión</title>
    <!-- Agrega las siguientes líneas para incluir los archivos CSS de Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <style>
        body {
            background-color: #f8f9fa;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .card {
            border: none;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            margin: 20px;
            width: 400px; /* Ajusta el ancho de la tarjeta según tus preferencias */
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }
       .card-header {
    background-color: #007bff;
    color: rgb(255, 255, 255);
    font-weight: bold;
    font-size: 24px;
    padding: 20px;
    border-top-left-radius: 10px;
    border-top-right-radius: 10px;
    margin-bottom: 10px;
    text-align: center;
    width: 100%; /* Agrega esta propiedad para que ocupe todo el ancho */
}

        .btn-primary {
            background-color: #007bff;
            border: none;
            font-size: 18px;
            padding: 10px 20px; /* Ajusta el relleno del botón según tus preferencias */
            border-radius: 5px; /* Añadido un radio de borde */
        }
        .btn-primary:hover {
            background-color: #0056b3;
        }
        .form-check-input:checked {
            background-color: #007bff;
            border-color: #007bff;
        }
        .form-check-label {
            font-weight: normal;
        }
        .mt-3 a {
            color: #007bff;
            text-decoration: none;
        }
        .form-group {
            margin-bottom: 20px;
        }
        .form-control {
            margin-bottom: 15px;
        }
    </style>
</head>
<body>
    <div class="card">
    <div class="card-header">{{ __('Bienvenido') }}</div>
    <div class="card-body">
        <form method="POST" action="{{ route('solicitudes.logincheck') }}" class="needs-validation" novalidate>
            @csrf

            <div class="form-group">
                <label for="email">{{ __('Correo electrónico') }}</label>
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                @error('email')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="form-group">
                <label for="password">{{ __('Contraseña') }}</label>
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                @error('password')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="form-group">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                    <label class="form-check-label" for="remember">
                        {{ __('Recordar sesión') }}
                    </label>
                </div>
            </div>

            <div class="form-group mb-0">
                <button type="submit" class="btn btn-primary">
                    {{ __('Iniciar sesión') }}
                </button>
        </form>

        <div class="mt-3">
                <a href="/solicitudes/password">{{ __('¿Olvidó su contraseña?') }}</a>
            </div>

        <div class="mt-3">
            <a href="/solicitudes/nuevousuario">{{ __('¿No tienes una cuenta? ¡Regístrate aquí!') }}</a>
        </div>
    </div>
</div>


<!-- Agrega las siguientes líneas para incluir los archivos JavaScript de Bootstrap (opcional) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

</body>
</html>
