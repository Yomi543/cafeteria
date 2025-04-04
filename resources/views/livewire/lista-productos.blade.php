<div class="p-2">
    <div class="relative flex flex-col mt-6 text-gray-700 bg-white shadow-md bg-clip-border rounded-xl w-96">
        <div class="p-2 pb-4">
            <input type="search" wire:model="query" wire:keyup="search" placeholder="Buscar por nombre..." class="mt-1 border-gray-300 w-full focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm"/>
        </div>
    </div>
    @foreach($productos as $producto)
        <div class="relative flex flex-col mt-6 text-gray-700 bg-white shadow-md bg-clip-border rounded-xl w-96">
            <div class="p-6 pb-4 grid grid-cols-2 gap-2">
                <div>
                    <h5 class="block mb-2 font-sans text-xl antialiased font-semibold leading-snug tracking-normal text-blue-gray-900">
                        {{ $producto->nombre }}
                    </h5>

                    <div>
                        <p class="w-1/2 font-sans text-base antialiased font-light leading-relaxed text-inherit">
                            {{ __('Descripcion: ') .  $producto->descripcion }}
                        </p>
                    </div>
                </div>

                <div class="flex lg:items-end justify-end">
                    <img class="rounded-md h-48 w-48 " src="<?php echo asset("storage/$producto->imagen")?>" alt="vehicle_image"/>
                </div>
            </div>
            <div class="pb-4 px-4 pt-0">
                <a href="{{ route('edit-product', ['id' => $producto->id]) }}" class="inline-block">
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
    @endforeach
    <br/>
    {{ $productos->links() }}
</div>
