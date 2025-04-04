<div>
    <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
        <x-form-section submit="save">
            <x-slot name="title">
                {{ ('Agregar Producto') }}
            </x-slot>

            <x-slot name="description">
                {{ ('Cree un Nuevo producto.') }}
            </x-slot>

            <x-slot name="form">
                <!-- Name -->
                <div class="col-span-6 sm:col-span-4">
                    <x-label for="name" value="{{ __('Nombre') }}" />
                    <x-input id="name" type="text" class="mt-1 block w-full" wire:model.blur="nombre" required autocomplete="nombre" />
                    <x-input-error for="nombre" class="mt-2" />
                </div>

                <div class="col-span-6 sm:col-span-4">
                    <x-label for="descripcion" value="{{ __('Descripcion') }}" />
                    <x-input id="descripcion" type="text" class="mt-1 block w-full" wire:model.blur="descripcion" required autocomplete="descripcion" />
                    <x-input-error for="descripcion" class="mt-2" />
                </div>

                <div class="col-span-6 sm:col-span-4">
                    <x-label for="existencia" value="{{ __('Existencia') }}" />
                    <x-input id="existencia" type="number" class="mt-1 block w-full" wire:model.blur="existencia" required autocomplete="existencia" />
                    <x-input-error for="existencia" class="mt-2" />
                </div>

                <div class="col-span-6 sm:col-span-4">
                    <x-label for="status" value="{{ __('Estatus del Producto') }}" />
                    <x-select id="status" class="mt-1 block w-full" wire:model="status" required>
                        <option value=""> -- Seleccione -- </option>
                        <option value="1"> -- Existencia -- </option>
                        <option value="2"> -- No Disponible -- </option>

                    </x-select>
                    <x-input-error for="status" class="mt-2" />
                </div>

                <div class="col-span-6 sm:col-span-4">
                    <x-label for="precio" value="{{ __('Precio') }}" />
                    <x-input id="precio" type="number" class="mt-1 block w-full" wire:model.blur="precio" required autocomplete="precio" />
                    <x-input-error for="precio" class="mt-2" />
                </div>

                <!-- Imagen -->
                <div class="col-span-6 sm:col-span-4">
                    <x-label for="imagen" value="{{ __('Imagen') }}" />

                    @if($imagen)
                        <img class="object-cover rounded-md" src="{{ $imagen->temporaryUrl() }}" alt="image_preview" >
                    @endif

                    <x-input id="imagen" type="file" class="mt-1 block w-full" wire:model="imagen" required autocomplete="imagen" capture="environment" accept="image/*"/>
                    <x-input-error for="imagen" class="mt-2" />
                </div>

                <div class="col-span-6 sm:col-span-4">
                    <x-label for="categoria" value="{{ __('Categoria del Producto') }}" />
                    <x-select id="categoria" class="mt-1 block w-full" wire:model="categoria" required>
                        <option value=""> -- Elija una Categoria -- </option>
                        @foreach($categorias as $cat)
                            <option value="{{$cat->id}}"> {{$cat->categoria}} </option>

                        @endforeach

                    </x-select>
                    <x-input-error for="categoria" class="mt-2" />
                </div>


            </x-slot>

            <x-slot name="actions">
                <x-action-message class="me-3" on="saved">
                    {{ ('Guardado.') }}
                </x-action-message>

                <x-action-message class="me-3" on="save_error">
                    {{ ('Error.') }}
                </x-action-message>

                <x-button wire:loading.attr="disabled" wire:target="photo">
                    {{ __('Guardar') }}
                </x-button>
            </x-slot>

        </x-form-section>
    </div>
    </div>


