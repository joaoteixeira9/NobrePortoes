<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Portao extends Model
{
    use HasFactory;

    protected $fillable = [
        'tipo',
        'material',
        'cor',
        'largura',
        'altura',
        'descricao',
        'fotos_antes',
        'fotos_producao',
        'fotos_entrega',
    ];

    protected $casts = [
        'fotos_antes' => 'array',
        'fotos_producao' => 'array',
        'fotos_entrega' => 'array',
    ];
}
