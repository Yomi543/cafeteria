<div>
    <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
        <x-form-section submit="update">
            <x-slot name="title">
                {{ __('Imagen del Producto') }}
            </x-slot>

            <x-slot name="description">
                {{ __('Cambie la imagen del producto.') }}
            </x-slot>

            <x-slot name="form">

                <!-- Imagen -->
                <div class="col-span-6 sm:col-span-4">
                    <x-label for="imagen" value="{{ __('Imagen') }}" />

                    @if($image)
                        <img class="object-cover rounded-md" src="{{ $image->temporaryUrl() }}" alt="image_preview" >
                    @else
                        <img class="object-cover rounded-md" src="{{ asset('storage/'.$oldimage) }}" alt="image_preview" >
                    @endif

                    <x-input id="imagen" type="file" class="mt-1 block w-full" wire:model="image" required autocomplete="image" capture="environment" accept="image/*"/>
                    <x-input-error for="image" class="mt-2" />
                </div>

                <div class="pb-4 px-4 pt-0">
                    <a href="{{ route('edit-product', ['id' => $product->id]) }}" class="inline-block">
                        <button
                            class="flex items-center gap-2 px-4 py-2 font-sans text-xs font-bold text-center text-gray-900 uppercase align-middle transition-all rounded-lg select-none disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none hover:bg-gray-900/10 active:bg-gray-900/20"
                            type="button">
                            Regresar
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                                 stroke="currentColor" class="w-4 h-4">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25L21 12m0 0l-3.75 3.75M21 12H3"></path>
                            </svg>
                        </button>
                    </a>
                </div>

            </x-slot>

            <x-slot name="actions">
                <x-action-message class="me-3" on="saved">
                    {{ __('Guardado.') }}
                </x-action-message>

                <x-action-message class="me-3" on="save_error">
                    {{ __('Error.') }}
                </x-action-message>

                <x-button wire:loading.attr="disabled" wire:target="photo">
                    {{ __('Guardar') }}
                </x-button>
            </x-slot>

        </x-form-section>

        {{--        <div class="mt-10 sm:mt-0">--}}
        {{--            @livewire('profile.logout-other-browser-sessions-form')--}}
        {{--        </div>--}}

    </div>
</div>
