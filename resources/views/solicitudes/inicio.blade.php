<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog de Salud</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <style>
        body {
            background-color: #f8f9fa;
            font-family: Arial, sans-serif;
        }

        .header {
            text-align: center;
            padding: 2rem 0;
            color: #1a1e29;
        }

        .filters {
            padding: 1rem 0;
        }

        .blog-post {
            margin-bottom: 2rem;
        }

        ul {
            list-style-type: none;
            padding: 0;
        }

        /* Estilo para los filtros */
        .filter-container {
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 1rem;
            margin: 2rem auto;
        }

        /* Estilo para el botón de filtro */
        #filterButton {
            background-color: #007bff;
            color: white;
            border: none;
            padding: 0.5rem 1rem;
            border-radius: 0.25rem;
            cursor: pointer;
        }

        /* Estilo para las tarjetas de publicaciones */
        .card {
            border: none;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.2s ease-in-out;
        }

        .card:hover {
            transform: translateY(-5px);
        }

        .card-title {
            font-size: 1.25rem;
            font-weight: bold;
            color: #333;
        }

        .card-text.date {
            font-size: 0.875rem;
            color: #6c757d;
        }
    </style>
</head>
<body>
    <x-layouts.app>
        <div class="header">
            <h1>Blog de Salud</h1>
        </div>
        <div class="filter-container">
            <label for="startDate">Fecha de inicio:</label>
            <input type="date" id="startDate">
            <label for="endDate">Fecha de fin:</label>
            <input type="date" id="endDate">
            <button id="filterButton">Filtrar</button>
        </div>
        <div class="row" id="postList" style="padding-left: 5%">
            @foreach ($posts as $post)
            <div class="col-md-3 blog-post" data-date="{{ $post->created_at }}">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">{{ $post->title }}</h5>
                        <p class="card-text">{{ $post->description }}</p>
                        <p class="card-text date">Fecha: {{ $post->created_at ? date('d/m/Y', strtotime($post->created_at)) : 'Fecha desconocida' }}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </x-layouts.app>
    <script>
        const filterButton = document.getElementById("filterButton");
        const startDateInput = document.getElementById("startDate");
        const endDateInput = document.getElementById("endDate");
        const postList = document.getElementById("postList").getElementsByClassName("blog-post");
    
        filterButton.addEventListener("click", () => {
            const startDate = startDateInput.value; // Fecha de inicio en formato YYYY-MM-DD
            const endDate = endDateInput.value;     // Fecha de fin en formato YYYY-MM-DD
    
            for (const post of postList) {
                const postDateWithTime = post.getAttribute("data-date"); // Fecha del post en formato "YYYY-MM-DD HH:MM:SS"
                
                // Extraer solo la parte de la fecha (YYYY-MM-DD)
                const postDate = postDateWithTime.split(" ")[0];

                console.log('la fecha del post',postDate)
            console.log('1',startDate)
            console.log('2',endDate)
    
                if (postDate >= startDate && postDate <= endDate) {
                    post.style.display = "block";
                } else {
                    post.style.display = "none";
                }
            }
        });
    </script>
    
    
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</html>
