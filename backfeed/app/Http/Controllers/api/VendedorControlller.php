<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Vendedor;

class VendedorControlller extends Controller
{
    
    public function index()
    {
        return Vendedor::all();
    }
    
    public function store(Request $request)
    {
        Vendedor::create($request->all());
    }

    public function show($id)
    {
        return Vendedor::findOrFail($id);
    }
    
    public function update(Request $request, $id)
    {
        $vendedor = Vendedor::findOrFail($id);
        $vendedor->update($request->all());
    }
    
    public function destroy($id)
    {
        $cliente = Vendedor::findOrFail($id);
        $cliente->delete();
    }

}
