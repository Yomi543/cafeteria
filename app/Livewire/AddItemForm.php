<?php

namespace App\Livewire;

use App\Models\Product;
use Gloudemans\Shoppingcart\Cart;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class AddItemForm extends Component
{
    public Product $product;
    public $cantidad = 1;
    public $subtotal;


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
            \Cart::session($userID)->add(array(
                'id' => $this->product->id,
                'name' => $this->product->nombre,
                'price' => $this->product->precio,
                'quantity' => $this->cantidad,
            ));
            $this -> dispatch("saved");
        }catch (\Exception $e){
            $this -> dispatch("save_error");
        }
    }
}


