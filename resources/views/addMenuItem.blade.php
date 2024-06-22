<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Adicionar Item ao Menu</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <h1 class="mt-5">Adicionar Item ao Menu</h1>
    <form action="{{ route('menu-items.store') }}" method="post" class="mt-3">
        @csrf
        <div class="form-group">
            <label for="restauranteId">ID do Restaurante</label>
            <input type="text" class="form-control" id="restauranteId" name="restauranteId" value="{{ $restauranteId }}" readonly>
        </div>
        <div class="form-group">
            <label for="item">Item</label>
            <input type="text" class="form-control" id="item" name="item" required>
        </div>
        <div class="form-group">
            <label for="preco">Preço</label>
            <input type="number" step="0.01" class="form-control" id="preco" name="preco" required>
        </div>
        <button type="submit" class="btn btn-primary">Adicionar</button>
    </form>
</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>
