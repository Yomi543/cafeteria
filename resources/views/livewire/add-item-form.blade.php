<div>
    <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
        <x-form-section submit="agregarCarrito">
            <x-slot name="title">
                {{ ('Agregar Producto') }}
            </x-slot>

            <x-slot name="description">
                {{ ('Agregar un producto.') }}
            </x-slot>

            <x-slot name="form">
                <!-- Name -->
                <!-- Imagen -->
                <div class="col-span-6 sm:col-span-4">
                    <h3>
                        {{$product->descripcion}}
                    </h3>
                    <img class="object-cover rounded-md" src="{{ asset("storage/".$product->imagen)}}" alt="image_preview" >
                    <h4>
                       {{"Precio: $".$product->precio}}
                    </h4>
                    <h4>
                        {{"Subtotal: $".$subtotal}}
                    </h4>
                </div>
                <div class="col-span-6 sm:col-span-4">
                    <x-label for="cantidad" value="{{ __('Cantidad') }}" />
                    <x-input id="cantidad" type="number" class="mt-1 block w-full" wire:model.blur="cantidad" required autocomplete="cantidad" wire:change="calculaSubtotal" />
                    <x-label value="{{ __('Disponible:').$product-> existencia }}" />
                    <x-input-error for="cantidad" class="mt-2" />

                </div>



            </x-slot>

            <x-slot name="actions">
                <x-action-message class="me-3" on="saved">
                    {{ ('Añadido.') }}
                </x-action-message>

                <x-action-message class="me-3" on="save_error">
                    {{ ('Error.') }}
                </x-action-message>

                <x-button wire:loading.attr="disabled" wire:target="photo">
                    {{ __('Agregar') }}
                </x-button>
            </x-slot>

        </x-form-section>
    </div>
</div>




