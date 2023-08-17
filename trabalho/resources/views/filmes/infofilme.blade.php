<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="{{ asset('css/lista.css') }}" rel="stylesheet">
    <title>Detalhes do Filme</title>
</head>
<body>
<div class="header">
        <h1>Detalhes do Filme</h1>
        <nav>
            <a href="{{ route('lista') }}">Voltar à Lista</a>
        </nav>
    </div>
    <div class="container">
        <div class="film-details">
            <img src="{{ asset('storage/' . $filme->imagem) }}">
            <h2>{{ $filme->name }}</h2>
            <p><strong>{{ $filme->ano }}</strong></p>
            <p class="sinopse">{{ $filme->sinopse }}</p>
            <a href="{{$filme->link}}" target="_blank">Assistir ao Trailer</a>
        </div>
    </div>
</body>
</html>
