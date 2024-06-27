<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\CakeMedida;
use App\Models\Decoracion;
use App\Models\MedioContacto;


class CrearPedido extends Component
{
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
