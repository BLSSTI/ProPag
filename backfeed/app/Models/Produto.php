<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    protected $fillable = [
        'caminhoimg1', 'caminhoimg2', 'caminhoimg3', 'produto', 'valor', 'descricao', 'entrega', 'retirada', 'vendedor_id', 
    ];
}
