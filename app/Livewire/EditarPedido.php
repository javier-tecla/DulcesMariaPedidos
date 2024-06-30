<?php

namespace App\Livewire;

use App\Models\Pedido;
use Livewire\Component;
use App\Models\CakeMedida;
use App\Models\Decoracion;
use App\Models\MedioContacto;
use Illuminate\Support\Carbon;

class EditarPedido extends Component
{
    public $pedido_id;
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

    public function mount(Pedido $pedido)
    {
        $this->pedido_id = $pedido->id;
        $this->nombre_del_cake = $pedido->nombre_del_cake;
        $this->sabor = $pedido->sabor;
        $this->relleno = $pedido->relleno;
        $this->decoracion_del_cake = $pedido->decoracion_del_cake_id;
        $this->medida_del_cake = $pedido->medida_del_cake_id;
        $this->fecha_entrega = Carbon::parse($pedido->fecha_entrega)->format('Y-m-d');
        $this->nombre_del_cliente = $pedido->nombre_del_cliente;
        $this->telefono = $pedido->telefono;
        $this->precio = $pedido->precio;
        $this->hora = Carbon::parse($pedido->hora)->format('H:i:s');
        $this->me_contacto = $pedido->me_contacto_id;
        $this->nota = $pedido->nota;
    }
    
    public function editarPedido()
    {
        $datos = $this->validate();

        // Encontrar el pedido a editar
        $pedido = Pedido::find($this->pedido_id);

        // Asignar los valores
        $pedido->nombre_del_cake = $datos['nombre_del_cake'];
        $pedido->sabor = $datos['sabor'];
        $pedido->relleno = $datos['relleno'];
        $pedido->decoracion_del_cake_id = $datos['decoracion_del_cake'];
        $pedido->medida_del_cake_id = $datos['medida_del_cake'];
        $pedido->fecha_entrega = $datos['fecha_entrega'];
        $pedido->nombre_del_cliente = $datos['nombre_del_cliente'];
        $pedido->telefono = $datos['telefono'];
        $pedido->precio = $datos['precio'];
        $pedido->hora = $datos['hora'];
        $pedido->me_contacto_id = $datos['me_contacto'];
        $pedido->nota = $datos['nota'];

        // Guardar el pedido
        $pedido->save();

        // Redireccionar
        session()->flash('mensaje', 'El Pedido se actualizó Correctamente');

        return redirect()->route('pedidos.index');
    }

    public function render()
    {
              // Consultar BD
              $decoracions = Decoracion::all();
              $cake_medidas = CakeMedida::all();
              $medio_contactos = MedioContacto::all();

        return view('livewire.editar-pedido', [
            'decoracions' => $decoracions,
            'cake_medidas' => $cake_medidas,
            'medio_contactos' => $medio_contactos,
        ]);
    }
}
