<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Usuario;
use App\Models\Pedido;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        // Insertar registros en la tabla usuarios
        Usuario::create(['nombre' => 'Juan Perez', 'correo' => 'juan@example.com', 'telefono' => '123456789']); // Insertar un registro en la tabla usuarios
        Usuario::create(['nombre' => 'Maria Lopez', 'correo' => 'maria@example.com', 'telefono' => '987654321']); // Insertar un registro en la tabla usuarios
        Usuario::create(['nombre' => 'Roberto Gomez', 'correo' => 'roberto@example.com', 'telefono' => '456123789']); // Insertar un registro en la tabla usuarios
        Usuario::create(['nombre' => 'Rosa Martinez', 'correo' => 'rosa@example.com', 'telefono' => '789456123']); // Insertar un registro en la tabla usuarios
        Usuario::create(['nombre' => 'Carlos Sanchez', 'correo' => 'carlos@example.com', 'telefono' => '321654987']); // Insertar un registro en la tabla usuarios

        // Insertar registros en la tabla pedidos
        Pedido::create(['producto' => 'Producto A', 'cantidad' => 2, 'total' => 150.00, 'id_usuario' => 1]); // Insertar un registro en la tabla pedidos
        Pedido::create(['producto' => 'Producto B', 'cantidad' => 1, 'total' => 200.00, 'id_usuario' => 2]); // Insertar un registro en la tabla pedidos
        Pedido::create(['producto' => 'Producto C', 'cantidad' => 3, 'total' => 300.00, 'id_usuario' => 3]); // Insertar un registro en la tabla pedidos
        Pedido::create(['producto' => 'Producto D', 'cantidad' => 4, 'total' => 100.00, 'id_usuario' => 4]); // Insertar un registro en la tabla pedidos
        Pedido::create(['producto' => 'Producto E', 'cantidad' => 5, 'total' => 250.00, 'id_usuario' => 5]); // Insertar un registro en la tabla pedidos
    }
}
