<?php

namespace App\Livewire;

use Livewire\Component;

class MostrarPedido extends Component
{
    public $pedido;

    public function render()
    {
        return view('livewire.mostrar-pedido');
    }
}
