<?php

namespace App\Livewire;

use App\Models\Pedido;
use Livewire\Component;
use Livewire\WithPagination;

class MostrarPedidos extends Component
{
    use WithPagination;

    protected $listeners = ['eliminarPedido'];

   public function eliminarPedido($pedidoId)
   {
        $pedido = Pedido::findOrFail($pedidoId);
        $pedido->delete();

         // Mostrar un mensaje de confirmación
         session()->flash('message', 'Pedido eliminado correctamente.');

         // Actualizar la lista de pedidos después de eliminar
         $this->resetPage(); // Reinicia la página actual a la primera
   }

    public function render()
    {
        $pedidos = Pedido::paginate(5);

        return view('livewire.mostrar-pedidos', [
            'pedidos' => $pedidos
        ]);
    }
}
