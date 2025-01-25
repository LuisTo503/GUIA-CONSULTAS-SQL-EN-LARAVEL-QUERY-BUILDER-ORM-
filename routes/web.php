<?php

use Illuminate\Support\Facades\Route; // Importar la clase Route
use App\Http\Controllers\UsuarioController; // Importar el controlador UsuarioController
use App\Http\Controllers\PedidoController; // Importar el controlador PedidoController

Route::resource('usuarios', UsuarioController::class); // Rutas para el recurso usuarios
Route::get('pedidos-usuario-2', [UsuarioController::class, 'pedidosUsuario2']); // Ruta para el método pedidosUsuario2
Route::get('pedidos-con-usuarios', [UsuarioController::class, 'pedidosConUsuarios']); // Ruta para el método pedidosConUsuarios
Route::get('pedidos-en-rango', [UsuarioController::class, 'pedidosEnRango']); // Ruta para el método pedidosEnRango
Route::get('usuarios-con-r', [UsuarioController::class, 'usuariosConR']);  // Ruta para el método usuariosConR
Route::get('total-pedidos-usuario-5', [UsuarioController::class, 'totalPedidosUsuario5']); // Ruta para el método totalPedidosUsuario5
Route::get('pedidos-ordenados', [UsuarioController::class, 'pedidosOrdenados']); // Ruta para el método pedidosOrdenados
Route::get('suma-total-pedidos', [UsuarioController::class, 'sumaTotalPedidos']); // Ruta para el método sumaTotalPedidos
Route::get('pedido-mas-economico', [UsuarioController::class, 'pedidoMasEconomico']); // Ruta para el método pedidoMasEconomico
Route::get('pedidos-agrupados-por-usuario', [UsuarioController::class, 'pedidosAgrupadosPorUsuario']); // Ruta para el método pedidosAgrupadosPorUsuario
