<div>
    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">

        
        @forelse ($pedidos as $pedido) 
            <div class="p-6 bg-white border-b border-gray-200 md:flex md:justify-between md:items-center">
                <div class="space-y-3">
                    <a href="{{ route('pedidos.show', $pedido->id )}}" class="text-xl font-bold">
                        {{ $pedido->nombre_del_cake }}
                    </a>
                    {{-- <p class="text-sm text-gray-600"><span class="font-bold">Sabor:</span> {{ $pedido->sabor }}</p>
                    <p class="text-sm text-gray-600"><span class="font-bold">Relleno:</span> {{ $pedido->relleno }}</p>
                    <p class="text-sm text-gray-600"><span class="font-bold">Decoración:</span> {{ $pedido->decoracion_del_cake_id }}</p>
                    <p class="text-sm text-gray-600"><span class="font-bold">Medida:</span> {{ $pedido->medida_del_cake_id }}</p>
                    <p class="text-sm text-gray-600"><span class="font-bold">Nota:</span> {{ Illuminate\Support\str::limit($pedido->nota, 30) }}</p> --}}
                    <p class="text-sm text-gray-600"><span class="font-bold">Nombre Cliente:</span> {{ $pedido->nombre_del_cliente }}</p>
                    <p class="text-sm text-gray-600"><span class="font-bold">Telefono:</span> {{ $pedido->telefono }}</p>
                    <p class="text-sm text-gray-600"><span class="font-bold">Fecha de Entrega:</span> {{ $pedido->fecha_entrega->format('d/m/Y') }}</p>
                    <p class="text-sm text-gray-600"><span class="font-bold">Hora de Entrega:</span> {{ $pedido->hora->format('h:i A') }}</p>
                    {{-- <p class="text-sm text-gray-600"><span class="font-bold">Precio:</span> ${{ $pedido->precio }}</p> --}}
                    {{-- <p class="text-sm text-gray-600"><span class="font-bold">Medio de Contacto:</span> {{ $pedido->me_contacto_id }}</p> --}}
                </div>

                
                  
                

                <div class="flex flex-col md:flex-row items-stretch gap-3 mt-5 md:mt-0">
                    <a href="{{ route('pedidos.edit', $pedido->id) }}" class="bg-blue-800 py-2 px-4 rounded-lg text-white text-xs font-bold uppercase text-center">
                        Editar
                    </a>

                    <button 
                        wire:click="$dispatch('mostrarAlerta', {{ $pedido->id }})"
                        class="bg-red-600 py-2 px-4 rounded-lg text-white text-xs font-bold uppercase text-center">
                        Eliminar
                    </button>
                </div>
            </div>
        @empty
            <p class="p-3 text-center text-sm text-gray-600">No hay pedidos que mostrar</p>
        @endforelse
    </div>

    <div class="mt-10">
        {{ $pedidos->links() }}
    </div>

</div>

    @push('scripts')

        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

        <script>
            Livewire.on('mostrarAlerta', pedidoId => {
                Swal.fire({
                title: "Eliminar Pedido?",
                text: "Un pedido eliminado no se puede recuperar!",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Si, Eliminar!",
                cancelButtonText: 'Cancelar'
            }).then((result) => {
                    if (result.isConfirmed) {
                        // eliminar el pedido
                        Livewire.dispatch('eliminarPedido', pedidoId)

                      Swal.fire({
                        title: "Se eliminó el Pedido!",
                        text: "Eliminado Correctamente",
                        icon: "success"
                });
            }
        });
    });

          
        </script>
        
    @endpush
