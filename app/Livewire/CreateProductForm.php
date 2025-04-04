<?php

namespace App\Livewire;

use App\Models\Category;
use App\Models\Product;
use Livewire\Component;
use Livewire\WithFileUploads;

class CreateProductForm extends Component
{
    use WithFileUploads;
    public $nombre;
    public $descripcion;
    public $existencia;
    public $status;
    public $precio;
    public $imagen;
    public $categoria;

    protected $rules = [
        "nombre"=>"required|min:5|max:30",
        "descripcion"=>"required|min:5|max:100",
        "existencia"=>"required|int",
        "status"=>"required",
        "precio"=>"required|decimal:1,2",
        "imagen"=>"image|max:5120",
        "categoria"=>"required|int",
    ];

    public function render()
    {
        $categorias = Category::all();
        return view('livewire.create-product-form', [
            "categorias"=> $categorias
        ]);

    }

    public function save(){
        $this->validate();


        try {
            $path = $this->imagen->storePublicly("images/products","public");
            Product::create([
                "nombre"=>$this->nombre,
                "descripcion"=>$this->descripcion,
                "existencia"=>$this->existencia,
                "status"=>$this->status,
                "precio"=>$this->precio,
                "imagen"=>$path,
                "categoria_id"=>$this->categoria,
            ]);
            $this->dispatch("saved");

        } catch (\Exception $e){
            $this->dispatch("save_error");
        }


    }
}
