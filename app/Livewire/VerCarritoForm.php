<?php

namespace App\Livewire;

use App\Helpers\CarritoCompras;
use Livewire\Component;

class VerCarritoForm extends Component
{
    public function render()
    {
        $carrito = new CarritoCompras();
        $items = $carrito->showCart();
        $total = 0;

        foreach ($items as $item){
            $total += $item["price"]*$item["amount"];
        }
        return view('livewire.ver-carrito-form', [
            "items"=>$items,
            "total"=>$total

        ]);
    }
}
