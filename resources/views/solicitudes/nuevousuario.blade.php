<x-layouts.app>
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Usuario</title>
    <!-- Agrega el enlace al archivo CSS de Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Crear Usuario') }}</div>
                    <div class="card-body">

                        @if(session('success_message'))
                        <div class="alert alert-success">
                            {{ session('success_message') }}
                        </div>
                    @endif
                    
                    @if(session('error_message'))
                        <div class="alert alert-danger">
                            {{ session('error_message') }}
                        </div>
                    @endif
                    
                        <form id="registration-form"  method="POST" action="{{ route('solicitudes.register') }}"> 
                            @csrf

                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="tipo_documento">{{ __('Tipo de Documento') }}</label>
                                        <select id="tipo_documento" name="tipo_documento" class="form-control">
                                            <option value="Cédula de Ciudadanía">Cédula de Ciudadanía</option>
                                            <option value="Tarjeta de Identidad">Tarjeta de Identidad</option>
                                            <option value="Pasaporte">Pasaporte</option>
                                            <option value="Cédula de Extranjería">Cédula de Extranjería</option>
                                            <option value="NIT">NIT</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="numero_documento">{{ __('Número de Documento') }}</label>
                                        <input id="numero_documento" type="text" class="form-control" name="numero_documento" required>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="nombres">{{ __('Nombres') }}</label>
                                        <input id="nombres" type="text" class="form-control" name="nombres" required>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="apellidos">{{ __('Apellidos') }}</label>
                                        <input id="apellidos" type="text" class="form-control" name="apellidos" required>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="estado">{{ __('Estado') }}</label>
                                        <select id="estado" name="estado" class="form-control">
                                            <option value="1">{{ __('Activo') }}</option>
                                            <option value="0">{{ __('Inactivo') }}</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="password">{{ __('Contraseña') }}</label>
                                        <input id="password" type="password" class="form-control" name="password" required>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="observacion">{{ __('Observación') }}</label>
                                <textarea id="observacion" class="form-control" name="observacion"></textarea>
                            </div>

                            <div class="form-group">
                                <label for="direccion">{{ __('Dirección') }}</label>
                                <input id="direccion" type="text" class="form-control" name="direccion">
                            </div>

                            <div class="form-group">
                                <label for="telefonos">{{ __('Teléfonos') }}</label>
                                <input id="telefonos" type="text" class="form-control" name="telefonos">
                            </div>

                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="fecha_nacimiento">{{ __('Fecha de Nacimiento') }}</label>
                                        <input id="fecha_nacimiento" type="date" class="form-control" name="fecha_nacimiento">
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="email">{{ __('Correo Electrónico') }}</label>
                                        <input id="email" type="email" class="form-control" name="email" required>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="genero">{{ __('Género') }}</label>
                                        <select id="genero" name="genero" class="form-control">
                                            <option value="Femenino">{{ __('Femenino') }}</option>
                                            <option value="Masculino">{{ __('Masculino') }}</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#errorModal">{{ __('Guardar Usuario') }}</button>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>
</x-layouts.app>