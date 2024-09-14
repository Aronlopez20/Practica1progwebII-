<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_pedido';
    protected $fillable = ['id_cliente', 'id_juego', 'cantidad', 'fecha_pedido', 'total'];

    public function cliente()
    {
        return $this->belongsTo(Cliente::class, 'id_cliente');
    }

    public function juego()
    {
        return $this->belongsTo(Juego::class, 'id_juego');
    }
}
