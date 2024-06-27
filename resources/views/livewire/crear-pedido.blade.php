<form class="md:w-1/2 space-y-5">
    <div>
        <x-input-label for="cake" :value="__('Nombre del Cake')" />

        <x-text-input 
                id="cake" 
                class="block mt-1 w-full" 
                type="text" 
                wire:model="cake" 
                :value="old('cake')"
                Placeholder="Nombre del Cake" 
        />

        <x-input-error :messages="$errors->get('cake')" class="mt-2" />
    </div>

    <div>
        <x-input-label for="sabor" :value="__('Sabor')" />

        <x-text-input 
                id="sabor" 
                class="block mt-1 w-full" 
                type="text" 
                wire:model="sabor" 
                :value="old('sabor')"
                Placeholder="Sabor" 
        />

        <x-input-error :messages="$errors->get('sabor')" class="mt-2" />
    </div>

    <div>
        <x-input-label for="relleno" :value="__('Relleno')" />

        <x-text-input 
                id="relleno" 
                class="block mt-1 w-full" 
                type="text" 
                wire:model="relleno" 
                :value="old('relleno')"
                Placeholder="Relleno" 
        />


        <x-input-error :messages="$errors->get('relleno')" class="mt-2" />
    </div>

    <div>
        <x-input-label for="decoracion" :value="__('Decoración de Cake')" />
        <select
                id="decoracion" 
                wire:model="decoracion" 
                class="border-gray-300 focus:border-rose-400 focus:ring-rose-100 rounded-md shadow-sm w-full"
        >
            <option>-- Seleccione --</option>
            @foreach ($decoracions as $decoracion)
                <option value="{{ $decoracion->id }}">{{$decoracion->decoracion}}</option>
                
            @endforeach
        </select>
        

        <x-input-error :messages="$errors->get('decoracion')" class="mt-2" />
    </div>

    <div>
        <x-input-label for="cake_size" :value="__('Medida del Cake')" />

        <select
                id="cake_size" 
                wire:model="cake_size" 
                class="border-gray-300 focus:border-rose-400 focus:ring-rose-100 rounded-md shadow-sm w-full"
        >
            <option>-- Seleccione --</option>
            @foreach ($cake_medidas as $medida)
                <option value="{{ $medida->id }}">{{$medida->medida}}</option>
                
            @endforeach
        </select>

        <x-input-error :messages="$errors->get('medida')" class="mt-2" />
    </div>

    <div>
        <x-input-label for="fecha_entrega" :value="__('Fecha de Entrega')" />

        <x-text-input 
                id="fecha_entrega" 
                class="block mt-1 w-full" 
                type="date" 
                wire:model="fecha_entrega" 
                :value="old('fecha_entrega')" 
        />

        <x-input-error :messages="$errors->get('fecha_entrega')" class="mt-2" />
    </div>

    <div>
        <x-input-label for="cliente" :value="__('Nombre del Cliente')" />

        <x-text-input 
                id="cliente" 
                class="block mt-1 w-full" 
                type="text" 
                wire:model="cliente" 
                :value="old('cliente')"
                Placeholder="Nombre del Cliente" 
        />

        <x-input-error :messages="$errors->get('cliente')" class="mt-2" />
    </div>

    <div>
        <x-input-label for="telefono" :value="__('Telefono de Contacto')" />

        <x-text-input 
                id="telefono" 
                class="block mt-1 w-full" 
                type="tel" 
                wire:model="telefono" 
                :value="old('telefono')"
                Placeholder="Telefono de Contacto" 
        />

        <x-input-error :messages="$errors->get('cliente')" class="mt-2" />
    </div>

    <div>
        <x-input-label for="precio" :value="__('Precio')" />

        <x-text-input 
                id="precio" 
                class="block mt-1 w-full" 
                type="number" 
                wire:model="precio" 
                :value="old('precio')"
                Placeholder="Precio"
                min="0" step="0.01" 
        />

        <x-input-error :messages="$errors->get('precio')" class="mt-2" />
    </div>

    <div>
        <x-input-label for="hora" :value="__('Hora de Entrega')" />

        <x-text-input 
                id="hora" 
                class="block mt-1 w-full" 
                type="time" 
                wire:model="hora" 
                :value="old('hora')"
                Placeholder="Hora de Entrega" 
        />

        <x-input-error :messages="$errors->get('hora')" class="mt-2" />
    </div>

    <div>
        <x-input-label for="me_contacto" :value="__('Me Contacto por')" />
        <select
                id="me_contacto" 
                wire:model="me_contacto" 
                class="border-gray-300 focus:border-rose-400 focus:ring-rose-100 rounded-md shadow-sm w-full"
        >
        <option>-- Seleccione --</option>
        @foreach ($medio_contactos as $contacto)
            <option value="{{ $contacto->id }}">{{$contacto->contacto}}</option>
            
        @endforeach
        </select>

        <x-input-error :messages="$errors->get('me_contacto')" class="mt-2" />
    </div>

    <div>
        <x-input-label for="nota" :value="__('Nota de Observación')" />
        <textarea 
                name="nota" 
                Placeholder="Nota de Observación"
                class="border-gray-300 focus:border-rose-400 focus:ring-rose-100 rounded-md shadow-sm w-full h-72"
        /></textarea>

        <x-input-error :messages="$errors->get('nota')" class="mt-2" />
    </div>

    <x-primary-button>
        Crear Pedido
    </x-primary-button>


</form>

