<?php

namespace App\Livewire;

use App\Models\Product;
use Livewire\Component;
use Livewire\WithFileUploads;

class EditImageForm extends Component
{
    use WithFileUploads;
    public Product $product;
    public $image = "";
    public $oldimage = "";
    protected $rules = [
        "image"=>"image|max:5120",
    ];
    public function render()

    {
        return view('livewire.edit-image-form');
    }

    public function mount(){
        $this ->product = Product::find(request()->id);
        $this ->oldimage = $this -> product -> imagen;

    }

    public function update(){
        try {
            $this -> validate();
            $path = $this->image->storePublicly("images/products","public");
            $this -> product -> update([
                'imagen'=>$path
            ]);
            $this-> dispatch("saved");

        } catch(\Exception $e){
            $this-> dispatch("save_error");
        }
    }

}
