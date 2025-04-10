<table style="width: 100%; border-collapse: collapse; text-align: center; font-family: sans-serif; box-shadow: 0 0 10px rgba(0,0,0,0.1); border-radius: 10px; overflow: hidden;">
    <thead style="background-color: #f4f4f4;">
    <tr>
        <th style="padding: 12px;">Nombre</th>
        <th style="padding: 12px;">Precio</th>
        <th style="padding: 12px;">Cantidad</th>
    </tr>
    </thead>
    <tbody>
    @foreach($items as $item)
        <tr style="border-bottom: 1px solid #ddd;">
            <td style="padding: 10px; display: flex; align-items: center; gap: 10px; justify-content: center;">
                <img src="{{ asset('storage/' . $item['image']) }}" alt="Imagen de {{ $item['name'] }}" style="width: 50px; height: 50px; object-fit: cover; border-radius: 8px;">
                <span>{{ $item["name"] }}</span>
            </td>
            <td style="padding: 10px;">{{ $item["price"] }}</td>
            <td style="padding: 10px;">{{ $item["amount"] }}</td>
        </tr>
    @endforeach
    <tr style="border-bottom: 1px solid #ddd;">
        <td style="padding: 10px; display: flex; align-items: center; gap: 10px; justify-content: center;">
            <span>{{ __("total") }}</span>
        </td>
        <td style="padding: 10px;"></td>
        <td style="padding: 10px;"> $ {{ $total }}</td>
    </tr>
    <tr style="border-bottom: 1px solid #ddd;">
        <td style="padding: 10px; display: flex; align-items: center; gap: 10px; justify-content: center;" colspan="3">
            <a href="{{route("saleCart")}}">
                <x-button>
                    {{__("COMPRAR")}}
                </x-button>
            </a>

        </td>
    </tr>
    </tbody>
</table>


