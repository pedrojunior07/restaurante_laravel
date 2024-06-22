<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Adicionar Restaurante</title>
    <!-- Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .container {
            margin-top: 50px;
        }
    </style>
</head>
<body>

<div class="container">
    <h1 class="mb-4">Adicionar Restaurante</h1>
    <form action="{{ route('restaurants.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="nome">Nome</label>
            <input type="text" class="form-control" id="nome" name="nome" required>
        </div>
        <div class="form-group">
            <label for="localizacao">Localização</label>
            <input type="text" class="form-control" id="localizacao" name="localizacao" required>
        </div>
        <div class="form-group">
            <label for="caminhoImagem">Caminho da Imagem</label>
            <input type="file" class="form-control-file" id="caminhoImagem" name="caminhoImagem" required>
        </div>
        <button type="submit" class="btn btn-primary">Adicionar</button>
    </form>
</div>

<!-- Bootstrap JS and dependencies -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
