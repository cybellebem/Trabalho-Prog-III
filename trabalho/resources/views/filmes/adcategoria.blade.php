<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adicionar Categoria</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="{{ asset('css/edad.css') }}" rel="stylesheet">
</head>
<body>
    <div class="header">
        <h1>Adicionar Categoria</h1>
        <nav>
            <a href="{{ route('admin') }}">Tela inicial</a>
        </nav>
    </div>
    <div class="container">
        <form action="{{ route('adicionar.categoria') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">Nome da Categoria:</label>
                <input type="text" name="name" required>
            </div>
            <button type="submit" class="btn">Adicionar Categoria</button>
        </form>
    </div>
</body>
</html>
