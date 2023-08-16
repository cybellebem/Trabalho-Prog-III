<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="{{ asset('css/admin.css') }}" rel="stylesheet">
    <title>CRUD de Filmes</title>
</head>
<body>
    <div class="header">
        <h1>CRUD de Filmes</h1>
        <nav>
            <a href="{{ route('adfilme') }}">Adicionar filme</a>
            <a href="{{ route('logout') }}">Sair</a>
        </nav>
    </div>
    <div class="container">
        <div class="gallery">
            <div class="film-card">
                <img src="" alt="">
                <h3>Nome</h3>
                <p>Ano:</p>
                <p>Categoria:</p>
                <button class="edit-button">Editar</button>
                <button class="delete-button">Excluir</button>
            </div>
        </div>
    </div>
</body>
</html>
