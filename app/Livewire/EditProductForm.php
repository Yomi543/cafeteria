<?php

namespace App\Livewire;

use App\Models\Category;
use App\Models\Product;
use Livewire\Component;

class EditProductForm extends Component
{
    public $nombre;
    public $descripcion;
    public $existencia;
    public $status;
    public $precio;
    public $categoria;
    public $imagen;
    public $id;

    public Product $product;

    protected $rules = [
        "nombre"=>"required|min:5|max:30",
        "descripcion"=>"required|min:5|max:100",
        "existencia"=>"required|int",
        "status"=>"required",
        "precio"=>"required|decimal:1,2",
        "categoria"=>"required|int",
    ];
    public function render()
    {
        $categorias = Category::all();
        return view('livewire.edit-product-form', [
            "categorias"=> $categorias
        ]);
    }

    public function mount(){
        $product = Product::find(request()->id);
        $this -> id = request()->id;
        $this -> product = $product;
        $this->nombre = $product -> nombre;
        $this->descripcion = $product -> descripcion;
        $this->existencia = $product -> existencia;
        $this->status = $product -> status;
        $this->precio = $product -> precio;
        $this->imagen = $product -> imagen;
        $this->categoria = $product -> categoria_id;
    }

    public function update(){
        $this->validate();


        try {
            $this-> product-> update([
                "nombre"=>$this->nombre,
                "descripcion"=>$this->descripcion,
                "existencia"=>$this->existencia,
                "status"=>$this->status,
                "precio"=>$this->precio,
                "categoria_id"=>$this->categoria,
            ]);
            $this->dispatch("saved");

        } catch (\Exception $e){
            $this->dispatch("save_error");
        }

    }
}
