<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    use HasFactory;

    // O laravel ja faz um pluralizacao (associa uma model na tabela certa, ainda que a model esteja no singular e a tabela no plural)
    // Mas caso essa pluralizacao nao anconteca automaticamente, basta informar manualmente da seguinte:
    protected $table = 'produtos'; // Dessa forma, estamaos relacionando manualmente a model "Produto" com a tabela "produtos"
}
