<?php

namespace App\Livewire;

use App\Models\CakeMedida;
use Livewire\Component;
use App\Models\Decoracion;


class CrearPedido extends Component
{
    public function render()
    {
        // Consultar BD
        $decoracions = Decoracion::all();
        $cake_medidas = CakeMedida::all();

        return view('livewire.crear-pedido', [
            'decoracions' => $decoracions,
            'cake_medidas' => $cake_medidas,
        ]);
    }
}
