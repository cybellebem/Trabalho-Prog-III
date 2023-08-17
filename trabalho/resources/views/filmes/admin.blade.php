<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="{{ asset('css/listagens.css') }}" rel="stylesheet">
    <title>CRUD de Filmes</title>
</head>
<body>
    <div class="header">
        <h1>CRUD de Filmes</h1>
        <nav>
            <a href="{{ route('adfilme') }}">Adicionar filme</a>
            <a href="{{ route('logout') }}">Sair</a>
            <a href="{{ route('adcategoria') }}">Adicionar categoria</a>
        </nav>
    </div>
    <div class="container">
    <div class="gallery">
        @foreach ($filmes as $filme)
        <div class="film-card">
            <img src="{{ asset('storage/' . $filme->imagem) }}">
            <h3>{{ $filme->name }}</h3>
            <h4>{{ $filme->ano }}</h4>
            <p>{{ $filme->sinopse }}</p>
            <!--<p>Categoria: {{ $filme->categoria }}</p>-->
            <a href="{{$filme->link}}" target="_blank">Assistir ao Trailer</a>
            <br>
            <a href="{{ route('edfilme', ['id' => $filme->id]) }}" class="edit-button">Editar</a>
            <form action="{{ route('apagarfilme', ['id' => $filme->id]) }}" method="POST" class="delete-form">
                @csrf
                @method('DELETE')
                <button type="submit" class="delete-button">Excluir</button>
            </form>
        </div>
        @endforeach
    </div>
</div>
</body>
</html>
