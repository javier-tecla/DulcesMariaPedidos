<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\CakeMedida;
use App\Models\Decoracion;
use App\Models\MedioContacto;
use App\Models\Pedido;

class CrearPedido extends Component
{
    public $nombre_del_cake;
    public $sabor;
    public $relleno;
    public $decoracion_del_cake;
    public $medida_del_cake;
    public $fecha_entrega;
    public $nombre_del_cliente;
    public $telefono;
    public $precio;
    public $hora;
    public $me_contacto;
    public $nota;


    protected $rules = [
        'nombre_del_cake' => 'required|string',
        'sabor' => 'required|string',
        'relleno' => 'required|string',
        'decoracion_del_cake' => 'required',
        'medida_del_cake' => 'required',
        'fecha_entrega' => 'required|date',
        'nombre_del_cliente' => 'required',
        'telefono' => 'required|regex:/^[0-9]{1,15}$/',
        'precio' => 'required|numeric|min:0',
        'hora' => 'required',
        'me_contacto' => 'required',
        'nota' => 'required|string'
    ];

    public function crearPedido()
    {
       $datos = $this->validate();

        // Crear el Pedido
        Pedido::create([
            'nombre_del_cake' => $datos['nombre_del_cake'],
            'sabor' => $datos['sabor'],
            'relleno' => $datos['relleno'],
            'decoracion_del_cake_id' => $datos['decoracion_del_cake'],
            'medida_del_cake_id' => $datos['medida_del_cake'],
            'fecha_entrega' => $datos['fecha_entrega'],
            'nombre_del_cliente' => $datos['nombre_del_cliente'],
            'telefono' => $datos['telefono'],
            'precio' => $datos['precio'],
            'hora' => $datos['hora'],
            'me_contacto_id' => $datos['me_contacto'],
            'nota' => $datos['nota'],
        ]);

        // Crear un mensaje

        // Redireccionar al usuario
    }

    public function render()
    {
        // Consultar BD
        $decoracions = Decoracion::all();
        $cake_medidas = CakeMedida::all();
        $medio_contactos = MedioContacto::all();

        return view('livewire.crear-pedido', [
            'decoracions' => $decoracions,
            'cake_medidas' => $cake_medidas,
            'medio_contactos' => $medio_contactos,
        ]);
    }
}
