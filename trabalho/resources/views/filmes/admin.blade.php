<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('resources/css/style.css') }}" rel="stylesheet">
    <title>CRUD de Filmes</title>
    <style>
         body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            margin: 0;
            padding: 0;
        }

        .header {
        background-color: #333;
        color: #fff;
        padding: 10px;
        text-align: center;
        }

        .header a {
        color: #fff;
        text-decoration: none;
        }

        .header a:hover {
        color: #00bfff;
        }

        .header a:active {
        color: #0056b3;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }

        .gallery {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
            gap: 20px;
            margin-top: 20px;
        }

        .gallery img {
            width: 100%;
            height: auto;
            border-radius: 5px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
        }

        .search-bar {
            margin-top: 20px;
            text-align: center;
        }

        .search-bar input[type="text"] {
            width: 80%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <div class="header">
        <h1>CRUD de Filmes</h1>
        <nav>
            <a href="{{ route('adfilme') }}">Adicionar filme</a>
            <br>
            <a href="">Sair</a>
        </nav>
    </div>
    <div class="container">
        <div class="search-bar">
            <form action="" method="GET">
                <input type="text" name="search" placeholder="Pesquisar por nome...">
                <button type="submit">Buscar</button>
            </form>
        </div>
        <div class="gallery">

                <div class="film-card">
                    <img src="" alt="">
                    <h3>Nome</h3>
                    <p>Ano:</p>
                    <p>Categoria:</p>
                    <a href="">Editar</a>
                    <a href="">Excluir</a>
                </div>

        </div>
    </div>
</body>
</html>
