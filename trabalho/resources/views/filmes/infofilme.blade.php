<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <title>Listagem</title>
</head>
<body>

<div class="film-details">
        <h2>{{ $filme->name }}</h2>
        <img src="{{ asset('storage/' . $filme->imagem) }}" alt="{{ $filme->name }}">
        <p>Sinopse: {{ $filme->sinopse }}</p>
        <p>Ano: {{ $filme->ano }}</p>
        <a href="{{$filme->link}}">link</a>
        <!-- Adicione mais informações aqui -->
    </div>
</body>
</html>
