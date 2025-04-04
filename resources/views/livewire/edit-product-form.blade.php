<div>
    <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
        <x-form-section submit="update">
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
                    <img class="object-cover rounded-md" src="{{ asset("storage/".$imagen)}}" alt="image_preview" >
                    <div class="pb-4 px-4 pt-0">
                        <a href="{{ route('edit-image', ['id' => $id]) }}" class="inline-block">
                            <button
                                class="flex items-center gap-2 px-4 py-2 font-sans text-xs font-bold text-center text-gray-900 uppercase align-middle transition-all rounded-lg select-none disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none hover:bg-gray-900/10 active:bg-gray-900/20"
                                type="button">
                                Editar
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                                     stroke="currentColor" class="w-4 h-4">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25L21 12m0 0l-3.75 3.75M21 12H3"></path>
                                </svg>
                            </button>
                        </a>
                    </div>
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



