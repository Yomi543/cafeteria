<?php

namespace App\Livewire;

use App\Helpers\CarritoCompras;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class AddItemForm extends Component
{
    public Product $product;
    public $cantidad = 1;
    public $subtotal;

    protected $rules = [
        "cantidad"=>"required|int|min:1"
    ];

    public function calculaSubtotal(){
        $this -> subtotal = $this ->cantidad*$this->product->precio;
    }

    public function render()
    {
        return view('livewire.add-item-form');
    }

    public function mount(){
        $this ->product = Product::find(request()->id);
        $this ->calculaSubtotal();
    }

    public function agregarCarrito(){
        $user = Auth::user();
        $userID = $user->id;
        try{
            $this ->validate();
            $carrito = new CarritoCompras();
            $carrito ->AddToCart(
                $this -> product -> id,
                $this->product->nombre,
                $this->cantidad,
                $this->product->precio
            );
            $this -> dispatch("saved");
        }catch (\Exception $e){
            $this -> dispatch("save_error");
        }
    }
}


