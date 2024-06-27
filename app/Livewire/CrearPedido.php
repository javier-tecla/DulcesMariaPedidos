<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Decoracion;


class CrearPedido extends Component
{
    public function render()
    {
        // Consultar BD
        $decoracions = Decoracion::all();

        return view('livewire.crear-pedido', [
            'decoracions' => $decoracions,
        ]);
    }
}
