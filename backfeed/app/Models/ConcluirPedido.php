<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ConcluirPedido extends Model
{
    protected $fillable = [
        'pedido_id', 'list_qtdproduto', 'valor_pedido', 'forma_entrega', 'forma_pagamento', 'cupom_id', 'valor_total', 
    ];
}
