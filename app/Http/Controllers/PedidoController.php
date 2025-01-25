<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;
use App\Models\Pedido;

class PedidoController extends Controller
{
    // Método para listar todos los pedidos
    public function index()
    {
        $pedidos = Pedido::all();
        return response()->json($pedidos);
    }

    // Método para crear un nuevo pedido
    public function store(Request $request)
    {
        $pedido = Pedido::create($request->all());
        return response()->json($pedido, 201);
    }

    // Método para obtener un pedido por su ID
    public function show($id)
    {
        $pedido = Pedido::find($id);
        return response()->json($pedido);
    }

    // Método para actualizar un pedido por su ID
    public function update(Request $request, $id)
    {
        $pedido = Pedido::find($id);
        $pedido->update($request->all());
        return response()->json($pedido);
    }

    // Método para eliminar un pedido por su ID
    public function destroy($id)
    {
        Pedido::destroy($id); // Elimina el pedido por su ID
        return response()->json(null, 204); // 204 = Sin contenido
    }


}
