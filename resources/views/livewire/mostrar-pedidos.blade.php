<div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
    @foreach ($pedidos as $pedido) 
        <div class="p-6 bg-white border-b border-gray-200 md:flex md:justify-between md:items-center">
            <div class="space-y-3">
                <a href="#" class="text-xl font-bold">
                    {{ $pedido->nombre_del_cake }}
                </a>
                <p class="text-sm text-gray-600 font-bold">Sabor: {{ $pedido->sabor }}</p>
                <p class="text-sm text-gray-600 font-bold">Relleno: {{ $pedido->relleno }}</p>
                <p class="text-sm text-gray-600 font-bold">Decoración: {{ $pedido->decoracion_del_cake_id }}</p>
                <p class="text-sm text-gray-600 font-bold">Medida: {{ $pedido->medida_del_cake_id }}</p>
                <p class="text-sm text-gray-600 font-bold">{{ $pedido->nombre_del_cliente }}</p>
                <p class="text-sm text-gray-600 font-bold">Telefono: {{ $pedido->telefono }}</p>
                <p class="text-sm text-gray-500 ">Fecha de Entrega: {{ $pedido->fecha_entrega->format('d/m/Y') }}</p>
                <p class="text-sm text-gray-600 font-bold">Hora de entrega: {{ $pedido->hora->format('h:i A') }}</p>
                <p class="text-sm text-gray-500 ">Precio: ${{ $pedido->precio }}</p>
                <p class="text-sm text-gray-500 ">Medio de contacto: {{ $pedido->me_contacto_id }}</p>
                <p class="text-sm text-gray-500 ">Nota: {{ $pedido->nota}}</p>
            </div>

            <div class="flex flex-col md:flex-row items-stretch gap-3 mt-5 md:mt-0">
                <a href="#" class="bg-blue-800 py-2 px-4 rounded-lg text-white text-xs font-bold uppercase text-center">
                    Editar
                </a>

                <a href="#" class="bg-red-600 py-2 px-4 rounded-lg text-white text-xs font-bold uppercase text-center">
                    Eliminar
                </a>
            </div>
        </div>
    @endforeach
</div>
