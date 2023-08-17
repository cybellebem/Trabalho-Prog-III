<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adicionar Filme</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="{{ asset('css/edad.css') }}" rel="stylesheet">
</head>
<body>
    <div class="header">
        <h1>Adicionar Filme</h1>
        <nav>
            <a href="{{ route('admin') }}">Tela inicial</a>
        </nav>
    </div>
    <div class="container">
    <form action="{{ route('adicionar.filme') }}" method="POST" enctype="multipart/form-data">

            @csrf
            <div class="form-group">
                <label for="name">Nome:</label>
                <input type="text" name="name" required>
            </div>
            <div class="form-group">
                <label for="sinopse">Sinopse:</label>
                <textarea name="sinopse" rows="4" required></textarea>
            </div>
            <div class="form-group">
                <label for="ano">Ano:</label>
                <input type="number" name="ano" required>
            </div>
            <div class="form-group">
                <label for="imagem_capa">Imagem da Capa:</label>
                <input type="file" name="imagem" required>
            </div>
            <div class="form-group">
                <label for="link_trailer">Link do Trailer:</label>
                <input type="text" name="link" required>
            </div>
            <button type="submit" class="btn">Adicionar Filme</button>
        </form>
    </div>
</body>
</html>
