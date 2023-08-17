<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criar Filme</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="{{ asset('css/edad.css') }}" rel="stylesheet">
</head>
<body>
    <div class="header">
        <h1>Criar Filme</h1>
        <nav>
            <a href="{{ route('admin') }}">Tela inicial</a>
        </nav>
    </div>
    <div class="container">
    <form action="{{ route('admin') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">Nome:</label>
                <input type="text" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="sinopse">Sinopse:</label>
                <textarea id="sinopse" name="sinopse" rows="4" required></textarea>
            </div>
            <div class="form-group">
                <label for="ano">Ano:</label>
                <input type="number" id="ano" name="ano" required>
            </div>
            <div class="form-group">
                <label for="imagem_capa">Imagem da Capa:</label>
                <input type="file" id="imagem" name="imagem" required>
            </div>
            <div class="form-group">
                <label for="link_trailer">Link do Trailer:</label>
                <input type="text" id="link_trailer" name="link_trailer" required>
            </div>
            <button type="submit" class="btn">Criar Filme</button>
        </form>
    </div>
</body>
</html>
