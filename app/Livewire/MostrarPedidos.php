<?php

namespace App\Livewire;

use App\Models\Pedido;
use Livewire\Component;

class MostrarPedidos extends Component
{
    public function render()
    {
        $pedidos = Pedido::paginate(10);

        return view('livewire.mostrar-pedidos', [
            'pedidos' => $pedidos
        ]);
    }
}
