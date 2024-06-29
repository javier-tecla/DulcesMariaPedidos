<div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
    @foreach ($pedidos as $pedido) 
        <div class="p-6 bg-white border-b border-gray-200">
            <div class="leading-10">
                <a href="#" class="text-xl font-bold">
                    {{ $pedido->nombre_del_cake }}
                </a>
            </div>
        </div>
    @endforeach
</div>
