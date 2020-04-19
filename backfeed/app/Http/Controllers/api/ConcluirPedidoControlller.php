<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ConcluirPedido;

class ConcluirPedidoControlller extends Controller
{
    
    public function index()
    {
        return ConcluirPedido::all();
    }
    
    public function store(Request $request)
    {
        ConcluirPedido::create($request->all());
    }
   
    public function show($id)
    {
        return ConcluirPedido::findOrFail($id);
    }
    
    public function update(Request $request, $id)
    {
        $concluirpedido = ConcluirPedido::findOrFail($id);
       $concluirpedido->update($request->all());
    }

    public function destroy($id)
    {
        $concluirpedido = ConcluirPedido::findOrFail($id);
        $concluirpedido->delete();
    }
}
