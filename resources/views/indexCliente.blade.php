<!-- resources/views/indexCliente.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Restaurantes</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <div class="row">
        @if (session('cliente') === null)
        <div class="col-md-12">
            <p>Por favor, faça login para ver seus favoritos.</p>
        </div>
        @else
        <div class="col-md-12">
            <p>Bem-vindo, {{ session('cliente')->nome }}!</p>
            <a href="{{ route('logout') }}" class="btn btn-danger">Logout</a>
            <button class="btn btn-info" id="view-favorites">Meus Favoritos</button>
        </div>
        @endif
    </div>
    <div class="row">
        @foreach ($restaurantes as $restaurante)
        <div class="col-md-4">
            <div class="card mb-4">
                <img src="{{ asset('storage/' . $restaurante->caminhoImagem) }}" class="card-img-top" alt="{{ $restaurante->nome }}">
                <div class="card-body">
                    <h5 class="card-title">{{ $restaurante->nome }}</h5>
                    <p class="card-text">{{ $restaurante->localizacao }}</p>
                    <button class="btn btn-primary view-menu" data-id="{{ $restaurante->id }}">Ver Menu</button>
                    <button class="btn btn-success like-button" data-id="{{ $restaurante->id }}">
                        Like (<span id="likes-{{ $restaurante->id }}">{{ $restaurante->likes }}</span>)
                    </button>
                    @if (session('cliente') !== null)
                        @if (session('cliente')->favoritos->contains($restaurante->id))
                            <button class="btn btn-warning unfavorite-button" data-id="{{ $restaurante->id }}">Desmarcar Favorito</button>
                        @else
                            <button class="btn btn-secondary favorite-button" data-id="{{ $restaurante->id }}">Marcar como Favorito</button>
                        @endif
                    @endif
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
</body>
</html>
