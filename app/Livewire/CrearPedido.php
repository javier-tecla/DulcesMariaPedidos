<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\CakeMedida;
use App\Models\Decoracion;
use App\Models\MedioContacto;


class CrearPedido extends Component
{
    public $cake;
    public $sabor;
    public $relleno;
    public $decoracion;
    public $cake_size;
    public $fecha_entrega;
    public $cliente;
    public $telefono;
    public $precio;
    public $time;
    public $me_contacto;
    public $nota;


    protected $rules = [
        'cake' => 'required|string',
        'sabor' => 'required|string',
        'relleno' => 'required|string',
        'decoracion' => 'required',
        'cake_size' => 'required',
        'fecha_entrega' => 'required|date',
        'cliente' => 'required',
        'telefono' => 'required|regex:/^[0-9]{1,15}$/',
        'precio' => 'required|numeric|min:0',
        'time' => 'required',
        'me_contacto' => 'required',
        'nota' => 'required|string'
    ];

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
