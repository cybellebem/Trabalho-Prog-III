<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criar Filme</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            margin: 0;
            padding: 0;
        }

        .header {
        background-color: #333;
        color: #fff;
        padding: 10px;
        text-align: center;
        }

        .header a {
        color: #fff;
        text-decoration: none;
        }

        .header a:hover {
        color: #00bfff;
        }

        .header a:active {
        color: #0056b3;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            display: block;
            font-size: 14px;
            color: #333;
            text-transform: uppercase;
            margin-bottom: 5px;
        }

        input[type="text"],
        input[type="number"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        select {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .btn {
            background-color: #007bff;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .btn:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="header">
        <h1>Criar Filme</h1>
        <nav>
            <a href="{{ route('admin') }}">Tela inicial</a>
        </nav>
    </div>
    <div class="container">
        <form action="" method="POST">
            @csrf
            <div class="form-group">
                <label for="nome">Nome:</label>
                <input type="text" id="nome" name="nome" required>
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
                <label for="categoria">Categoria:</label>
                <select id="categoria" name="categoria" required>
                    <option value="Ação">Ação</option>
                    <option value="Aventura">Aventura</option>
                    <option value="Comédia">Comédia</option>
                    <option value="Drama">Drama</option>
                    <option value="Romance">Romance</option>
                </select>
            </div>
            <div class="form-group">
                <label for="imagem_capa">Imagem da Capa:</label>
                <input type="file" id="imagem_capa" name="imagem_capa" required>
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
