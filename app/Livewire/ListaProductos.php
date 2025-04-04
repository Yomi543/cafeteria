<?php

namespace App\Livewire;

use App\Models\Product;
use Livewire\Component;
use Livewire\WithPagination;

class ListaProductos extends Component
{
    use WithPagination;
    public $query = "";

    public function search(){
        $this -> resetPage();
    }
    public function render()
    {
        $productos = Product::where("nombre", "like", "%".$this->query."%")->paginate(10);
        return view('livewire.lista-productos', [
            "productos"=>$productos
        ]);
    }
}
