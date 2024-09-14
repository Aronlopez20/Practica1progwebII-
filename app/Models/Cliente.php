<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_cliente';
    protected $fillable = ['nombre', 'email', 'direccion', 'telefono'];

    public function pedidos()
    {
        return $this->hasMany(Pedido::class, 'id_cliente');
    }
}
