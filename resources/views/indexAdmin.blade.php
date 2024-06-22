<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Gestão de Restaurantes</title>
    <!-- Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .container {
            margin-top: 50px;
        }
        .btn-lg {
            width: 100%;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>

<div class="container text-center">
    <h1 class="mb-4">Gestão de Restaurantes</h1>
    <div class="row">
        <div class="col-md-6">
            <a href="{{ url('add-restaurant') }}" class="btn btn-primary btn-lg">Adicionar Restaurante</a>
        </div>
        <div class="col-md-6">
    <a href="{{ route('restaurants.index') }}" class="btn btn-secondary btn-lg">Listar Restaurantes</a>
</div>

    </div>
    <div class="row">
        <div class="col-md-6">
            <a href="{{ url('add-menu-item') }}" class="btn btn-success btn-lg">Adicionar Menu Item</a>
        </div>
        <div class="col-md-6">
            <a href="{{ url('listar-pedidos') }}" class="btn btn-warning btn-lg">Listar Pedidos</a>
        </div>
    </div>
</div>

<!-- Bootstrap JS and dependencies -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
