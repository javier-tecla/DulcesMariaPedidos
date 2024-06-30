<div class="p-10">
   <div class="mb-5">
        <h3 class="font-bold text-3xl text-gray-800 my-3">
            {{ $pedido->nombre_del_cake}}
        </h3>

        <div class="md:grid md:grid-cols-2 bg-gray-50 p-4 my-10">
            <p class="font-bold text-sm uppercase text-gray-800 my-3">
                Nombre del Cliente:
                <span class="normal-case font-normal">{{$pedido->nombre_del_cliente}}</span>
            </p>

            <p class="font-bold text-sm uppercase text-gray-800 my-3">
                Telefono:
                <span class="normal-case font-normal">{{ $pedido->telefono }}</span>
            </p>

            <p class="font-bold text-sm uppercase text-gray-800 my-3">
                Fecha de Entrega:
                <span class="normal-case font-normal">{{ $pedido->fecha_entrega->format('d/m/Y') }}</span>
            </p>

            <p class="font-bold text-sm uppercase text-gray-800 my-3">
                Hora de Entrega:
                <span class="normal-case font-normal"> {{ $pedido->hora->format('h:i A') }}</span>
            </p>

            <p class="font-bold text-sm uppercase text-gray-800 my-3">
                Me Contactó por:
                <span class="normal-case font-normal"> {{ $pedido->me_contacto->contacto }}</span>
            </p>

            <p class="font-bold text-sm uppercase text-gray-800 my-3">
                Precio:
                <span class="normal-case font-normal"> ${{ $pedido->precio }}</span>
            </p>

            <p class="font-bold text-sm uppercase text-gray-800 my-3">
                Sabor:
                <span class="normal-case font-normal"> {{ $pedido->sabor }}</span>
            </p>

            <p class="font-bold text-sm uppercase text-gray-800 my-3">
                Relleno:
                <span class="normal-case font-normal"> {{ $pedido->relleno }}</span>
            </p>

            <p class="font-bold text-sm uppercase text-gray-800 my-3">
                Decoración:
                <span class="normal-case font-normal"> {{ $pedido->decoracion_del_cake->decoracion }}</span>
            </p>

            <p class="font-bold text-sm uppercase text-gray-800 my-3">
                Medida:
                <span class="normal-case font-normal"> {{ $pedido->medida_del_cake->medida}}</span>
            </p>  
        </div>

        <div>
            <h2 class="text-2xl font-bold mb-5">
                Observación
            </h2>
            <p class="font-bold text-sm uppercase text-gray-800 my-3">
                <span class="normal-case font-normal"> {{ $pedido->nota}}</span>
            </p>
        </div>
   </div>
</div>
