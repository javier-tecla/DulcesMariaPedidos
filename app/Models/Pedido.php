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

    public function decoracion_del_cake()
    {
        return $this->belongsTo(Decoracion::class);
    }

    public function medida_del_cake()
    {
        return $this->belongsTo(CakeMedida::class);
    }

    public function me_contacto()
    {
        return $this->belongsTo(MedioContacto::class);
    }
}
