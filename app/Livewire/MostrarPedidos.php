<?php

namespace App\Livewire;

use App\Models\Pedido;
use Livewire\Component;

class MostrarPedidos extends Component
{
    protected $listeners = ['eliminarPedido'];

   public function eliminarPedido($pedidoId)
   {
        $pedido = Pedido::findOrFail($pedidoId);
        $pedido->delete();
   }

    public function render()
    {
        $pedidos = Pedido::paginate(5);

        return view('livewire.mostrar-pedidos', [
            'pedidos' => $pedidos
        ]);
    }
}
