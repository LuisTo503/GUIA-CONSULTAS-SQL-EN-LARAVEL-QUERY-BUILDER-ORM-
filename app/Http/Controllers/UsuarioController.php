<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use App\Models\Pedido;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    // Método para listar todos los usuarios
    //-- Devuelve todos los usuarios
    //SELECT * FROM usuarios;
    public function index()
    {
        return Usuario::all(); // Devuelve todos los usuarios
    }

    // 2. Recupera todos los pedidos asociados al usuario con ID 2
    //SELECT * FROM pedidos WHERE id_usuario = 2;
    public function pedidosUsuario2()
    {
        $pedidos = Pedido::where('id_usuario', 2)->get();// Obtener los pedidos del usuario con ID 2
        return response()->json($pedidos);
    }

    // 3. Obtén la información detallada de los pedidos, incluyendo el nombre y correo electrónico de los usuarios
    //SELECT * FROM pedidos INNER JOIN usuarios ON pedidos.id_usuario = usuarios.id;
    public function pedidosConUsuarios()
    {
        $pedidos = Pedido::with('usuario')->get();
        return response()->json($pedidos);
    }

    // 4. Recupera todos los pedidos cuyo total esté en el rango de $100 a $250
    //SELECT * FROM pedidos WHERE total BETWEEN 100 AND 250;
    public function pedidosEnRango()
    {
        $pedidos = Pedido::whereBetween('total', [100, 250])->get();
        return response()->json($pedidos);
    }

    // 5. Encuentra todos los usuarios cuyos nombres comiencen con la letra "R"
    //SELECT * FROM usuarios WHERE nombre LIKE 'R%';
    public function usuariosConR()
    {
        $usuarios = Usuario::where('nombre', 'like', 'R%')->get();
        return response()->json($usuarios);
    }

    // 6. Calcula el total de registros en la tabla de pedidos para el usuario con ID 5
    //SELECT COUNT(*) FROM pedidos WHERE id_usuario = 5;
    public function totalPedidosUsuario5()
    {
        $totalPedidos = Pedido::where('id_usuario', 5)->count();
        return response()->json(['total_pedidos' => $totalPedidos]);
    }

    // 7. Recupera todos los pedidos junto con la información de los usuarios, ordenándolos de forma descendente según el total del pedido
    //SELECT * FROM pedidos INNER JOIN usuarios ON pedidos.id_usuario = usuarios.id ORDER BY total DESC;
    public function pedidosOrdenados()
    {
        $pedidos = Pedido::with('usuario')->orderBy('total', 'desc')->get();
        return response()->json($pedidos);
    }

    // 8. Obtén la suma total del campo "total" en la tabla de pedidos
    //SELECT SUM(total) FROM pedidos;
    public function sumaTotalPedidos()
    {
        $sumaTotal = Pedido::sum('total');
        return response()->json(['suma_total' => $sumaTotal]);
    }

    // 9. Encuentra el pedido más económico, junto con el nombre del usuario asociado
    //SELECT * FROM pedidos INNER JOIN usuarios ON pedidos.id_usuario = usuarios.id ORDER BY total ASC LIMIT 1;
    public function pedidoMasEconomico()
    {
        $pedido = Pedido::with('usuario')->orderBy('total', 'asc')->first();
        return response()->json($pedido);
    }

    // 10. Obtén el producto, la cantidad y el total de cada pedido, agrupándolos por usuario
    //SELECT producto, cantidad, total, id_usuario FROM pedidos JOIN usuarios ON pedidos.id_usuario = usuarios.id GROUP BY id_usuario;
    public function pedidosAgrupadosPorUsuario()
    {
        $pedidos = Pedido::select('producto', 'cantidad', 'total', 'id_usuario')
            ->with('usuario')
            ->get()
            ->groupBy('id_usuario');
        return response()->json($pedidos);
    }
}
