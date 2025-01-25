<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Pedido extends Model
{
    // Modelo de la tabla pedidos
    use HasFactory;

    protected $table = 'pedidos';
    protected $fillable = ['producto', 'cantidad', 'total', 'id_usuario'];

    // relacion con la tabla usuarios.
    public function usuario()
    {
        return $this->belongsTo(Usuario::class, 'id_usuario');
    }
}
