<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cliente;

class ClienteControlller extends Controller
{
    
    public function index()
    {
        return Cliente::all();
    }

    public function store(Request $request)
    {
        Cliente::create($request->all());
    }

    public function show($id)
    {
        return Cliente::findOrFail($id);
    }
  
    public function update(Request $request, $id)
    {
       $cliente = Cliente::findOrFail($id);
       $cliente->update($request->all());

    }
  
    public function destroy($id)
    {
        $cliente = Cliente::findOrFail($id);
        $cliente->delete();
    }
}
