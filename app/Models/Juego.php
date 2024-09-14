<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Juego extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_juego';
    protected $fillable = ['titulo', 'precio', 'descripcion', 'fecha_lanzamiento'];

    public function pedidos()
    {

        return $this->hasMany(Pedido::class, 'id_juego');
    }
}
