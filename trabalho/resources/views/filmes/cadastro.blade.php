<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <title>Cadastro</title>
</head>
<body>
<div class="signup-container">
    <h2>Cadastro</h2>
    <form action="{{ route('cadastro') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="nome">Nome:</label>
            <input type="text" id="name" name="name" required>
        </div>
        <div class="form-group">
            <label for="email">E-mail:</label>
            <input type="email" id="email" name="email" required>
        </div>
        <div class="form-group">
            <label for="senha">Senha:</label>
            <input type="password" id="password" name="password" required>
        </div>
        <div class="form-group checkbox">
            <label for="administrador">Administrador:</label>
            <input type="checkbox" id="admin" name="admin">
        </div>
        <button type="submit" class="btn">Cadastrar</button>
    </form>
    <p>Já tem uma conta? <a href="{{ route('login') }}">Faça login</a></p>
</div>
</body>
</html>
