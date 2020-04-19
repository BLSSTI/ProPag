<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CriarPedido;

class CriarPedidoControlller extends Controller
{
   
    public function index()
    {
        return CriarPedido::all();
    }
 
    public function store(Request $request)
    {
        CriarPedido::create($request->all());
    }
  
    public function show($id)
    {
        return CriarPedido::findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $criarpedido = CriarPedido::findOrFail($id);
        $criarpedido->update($request->all());
    }

    public function destroy($id)
    {
        $criarpedido = CriarPedido::findOrFail($id);
        $criarpedido->delete();
    }
}
