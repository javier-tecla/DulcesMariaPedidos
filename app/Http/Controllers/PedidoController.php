<?php

namespace App\Http\Controllers;

use App\Models\Pedido;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

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
        Gate::authorize('create', Pedido::class);

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
        Gate::authorize('update', $pedido);

        return view('pedidos.edit', [
            'pedido' => $pedido
        ]);
    }

    public function destroy($id)
    {
        // Autorizar la acción
        Gate::authorize('delete', Pedido::class);

        // Encontrar el pedido por ID
        $pedido = Pedido::findOrFail($id);

        // Eliminar el pedido
        $pedido->delete();

        // Redirigir con un mensaje de éxito
        return redirect()->route('pedidos.index')->with('success', 'Pedido eliminado exitosamente.');
    }

   
}
