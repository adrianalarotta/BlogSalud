<x-layouts.app>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    
      <style>
      .entradas-de-texto-govco {
        padding: 0px !important;
        font-size: 16px !important;
        font-family: WorkSans-Regular !important;
      }

      .table-general thead th:nth-child(1) {
        width: 5% !important;
      }

      .table-general thead th:nth-child(2) {
        width: 10% !important;
      }

      .table-general thead th:nth-child(3) {
        width: 10% !important;
      }

      .table-general thead th:nth-child(4) {
        width: 10% !important;
      }

      .contenedor-tabla {
        width: 1198px !important;
        margin: 0 auto;
      }

      .table-general tbody td:nth-child(3) {
        text-align: left !important;
      }
    </style>

    
        <div class="container">
            <div class="row mt-4">
                <div class="col-md-11">
                    <div class="input-group mb-3" style="padding-left:40%">
                        <input id="campo-busqueda" type="text" class="form-control" placeholder="Buscar usuario por diferentes parámetros">
                        <div class="input-group-append">
                            <button class="btn btn-outline-secondary" type="button">Buscar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="col-md-12">
                <div class="contenedor-tabla">
                    <h4 class="modal-title-tables" id="tableDescCursorRows"></h4>
                    <table class="table table-general" aria-describedby="tableDescCursorRows">
                        <thead class="encabezado-tabla">
                            <tr>
                                <th>title</th>
                                <th>description</th>
                                <th>fecha</th>
                            </tr>
                        </thead>
                        <tbody class="contenido-tablas contenido-hover">
                            @if (!empty($registros))
                            @foreach ($registros as $registro)
                            <tr>
                                <td>{{ $registro->title }}</td>
                                <td>{{ $registro->description }}</td>
                                <td>{{ $registro->created_at }}</td>
                                
                            </tr>
                            @endforeach
                            @endif
                        </tbody>
                    </table>
                </div>
            
                <!-- Opción para crear un nuevo usuario -->
                <div class="mt-3">
                    <a href="/solicitudes/create" class="btn btn-success">Crear Nuevo post</a>
                </div>
                <div class="mt-3">
                    <a href="{{ route('solicitudes.importarPublicaciones') }}" class="btn btn-primary">Importar Publicaciones</a>

                </div>

            </div>
            
            </div>
        </div>
    
        <script>
            document.addEventListener('DOMContentLoaded', function () {
                var botonBusqueda = document.querySelector('.btn-outline-secondary');
                var campoBusqueda = document.getElementById('campo-busqueda');
                var filas = document.querySelectorAll('.contenido-tablas tr');
    
                botonBusqueda.addEventListener('click', function () {
                    var valorBusqueda = campoBusqueda.value.toLowerCase();
    
                    for (var i = 0; i < filas.length; i++) {
                        var celdas = filas[i].getElementsByTagName('td');
                        var encontrado = false;
    
                        for (var j = 0; j < celdas.length; j++) {
                            var textoCelda = celdas[j].textContent.toLowerCase();
    
                            if (textoCelda.indexOf(valorBusqueda) > -1) {
                                encontrado = true;
                                break;
                            }
                        }
    
                        filas[i].style.display = encontrado ? '' : 'none';
                    }
                });
            });
        </script>
    </x-layouts.app>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

    