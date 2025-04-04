<?php

namespace App\Livewire;

use Livewire\Component;

class VerCarritoForm extends Component
{
    public function render()
    {
        $items = \Cart::getContent();
        dd($items);
        return view('livewire.ver-carrito-form');
    }
}
