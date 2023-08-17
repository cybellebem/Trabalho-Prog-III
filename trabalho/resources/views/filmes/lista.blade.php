<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="{{ asset('css/listagens.css') }}" rel="stylesheet">
    <title>Listagem de Filmes</title>
</head>
<body>
    <div class="header">
        <h1>Listagem de Filmes</h1>
        <nav>
            <a href="{{ route('logout') }}">Sair</a>
        </nav>
    </div>
    <div class="container">
        <div class="gallery">
            @foreach ($filmes as $filme)
            <div class="film-card">
                <img src="{{ asset('storage/' . $filme->imagem) }}">
                <h3>{{ $filme->name }}</h3>
                <p><a href="{{ route('infofilme', ['id' => $filme->id]) }}">Saiba mais</a></p>
            </div>
            @endforeach
        </div>
    </div>
</body>
</html>

