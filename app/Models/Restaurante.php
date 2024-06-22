<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Restaurante extends Model
{
    use HasFactory;

    protected $table = 'restaurante';

    protected $fillable = [
        'nome',
        'localizacao',
        'likes',
        'caminhoImagem',
    ];

    // Relacionamentos
    public function menuItems()
    {
        return $this->hasMany(MenuItem::class, 'retauranteId');
    }
}
