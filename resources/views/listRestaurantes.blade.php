<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Listar Restaurantes</title>
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
    <h1 class="mb-4">Listar Restaurantes</h1>
    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>Nome</th>
                <th>Localização</th>
                <th>Imagem</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($restaurantes as $restaurante)
            <tr>
                <td>{{ $restaurante->nome }}</td>
                <td>{{ $restaurante->localizacao }}</td>
                <td><img src="{{ asset('storage/' . $restaurante->caminhoImagem) }}" alt="{{ $restaurante->nome }}" style="width: 100px; height: auto;"></td>
                <td>
                    <a href="{{ route('menu-items.create', ['restauranteId' => $restaurante->id]) }}" class="btn btn-success">Adicionar Item de Menu</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

<!-- Bootstrap JS and dependencies -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
