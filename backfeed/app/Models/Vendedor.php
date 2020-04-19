<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Vendedor extends Model
{
    protected $fillable = [
        'cnpj', 'rsocial', 'nfantasia', 'celular', 'email', 'site', 'cep', 'rua', 'numero', 'complemento', 'bairro', 'cidade', 'estado',
    ];
}
