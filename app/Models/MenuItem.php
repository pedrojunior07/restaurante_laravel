<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MenuItem extends Model
{
    use HasFactory;

    protected $table = 'menuitem';

    protected $fillable = [
        'retauranteId',
        'item',
        'preco',
    ];

    // // Relacionamentos
    // public function restaurante()
    // {
    //     return $this->belongsTo(Restaurante::class, 'retauranteId');
    // }
}
