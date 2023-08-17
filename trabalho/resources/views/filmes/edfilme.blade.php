<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="{{ asset('css/edad.css') }}" rel="stylesheet">
    <title>Editar Filme</title>
</head>
<body>
    <div class="header">
        <h1>Editar Filme</h1>
        <nav>
            <a href="{{ route('admin') }}">Tela inicial</a>
        </nav>
    </div>
    <div class="container">
        <form action="{{ route('atualizar.filme', ['id' => $filme->id]) }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="nome">Nome:</label>
                <input type="text" name="name" value="{{ $filme->name }}" required>
            </div>
            <div class="form-group">
                <label for="sinopse">Sinopse:</label>
                <textarea name="sinopse" rows="4" required>{{ $filme->sinopse }}</textarea>
            </div>
            <div class="form-group">
                <label for="ano">Ano:</label>
                <input type="number" name="ano" value="{{ $filme->ano }}" required>
            </div>
            <div class="form-group">
                <label for="imagem_capa">Imagem da Capa:</label>
                <input type="file" name="imagem" required>
            </div>
            <div class="form-group">
                <label for="link_trailer">Link do Trailer:</label>
                <input type="text" name="link" value="{{ $filme->link }}" required>
            </div>
            <button type="submit" class="btn">Editar</button>
        </form>
    </div>
</body>
</html>
