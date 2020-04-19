<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CriarPedido extends Model
{
    protected $fillable = [
        'list_produto', 'list_qtdproduto', 'cliente_id', 'vendedor_id', 'observacao', 
    ];
}
