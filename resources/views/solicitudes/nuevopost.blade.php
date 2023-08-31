<x-layouts.app>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Crear Entrada</title>
        <!-- Agrega el enlace al archivo CSS de Bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    </head>
    <body>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">{{ __('Crear Entrada') }}</div>
                        <div class="card-body">

                            <form id="entry-form" method="POST" action="{{ route('solicitudes.createPost') }}">
                                @csrf

                                <div class="form-group">
                                    <label for="title">{{ __('Título') }}</label>
                                    <input id="title" type="text" class="form-control" name="title" required>
                                </div>

                                <div class="form-group">
                                    <label for="description">{{ __('Descripción') }}</label>
                                    <textarea id="description" class="form-control" name="description" rows="4" required></textarea>
                                </div>

                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary">{{ __('Guardar Entrada') }}</button>
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
