<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    use HasFactory;

    protected $casts = [
        'fecha_entrega'=>'date',
        'hora' => 'datetime:h:i A',
    ];
    

    protected $fillable = [
        'nombre_del_cake',
        'sabor',
        'relleno',
        'decoracion_del_cake_id',
        'medida_del_cake_id',
        'fecha_entrega',
        'nombre_del_cliente',
        'telefono',
        'precio',
        'hora',
        'me_contacto_id',
        'nota',
    ];
}
