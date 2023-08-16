<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <title>Listagem</title>
</head>
<body>

<div class="film-gallery">
        @foreach ($filmes as $filme)
            <a href="{{ route('infofilme', $filme->id) }}">
                <div class="film-card">
                    <img src="{{ asset('storage/' . $filme->imagem) }}" >
                    <p>{{ $filme->name }}</p>
                </div>
            </a>
        @endforeach
    </div>
</body>
</html>
