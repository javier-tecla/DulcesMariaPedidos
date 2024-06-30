<?php

namespace App\Http\Controllers;

use App\Models\Pedido;
use Illuminate\Http\Request;

class PedidoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('pedidos.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pedidos.create');
    }

    /**
     * Display the specified resource.
     */
    public function show(Pedido $pedido)
    {
        return view('pedidos.show', [
            'pedido' => $pedido
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pedido $pedido)
    {
        return view('pedidos.edit', [
            'pedido' => $pedido
        ]);
    }

   
}
