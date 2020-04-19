<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $fillable = [
        'nome', 'email', 'cpf', 'celular', 'sexo', 'cep', 'rua', 'numero', 'complemento', 'bairro', 'cidade', 'estado',
    ];

}
