<?php


namespace App\Helpers;


use App\Models\Product;

class CarritoCompras
{
    public bool $cartExists;
    public array $cartData;

    public function __construct()
    {
        $cart = session('cart');
        $this->cartExists = !empty($cart);
        $this->cartData = ($this->cartExists) ? $this->cartData = json_decode($cart, true) : [];
    }

    public function AddToCart(int $productId, string $productName, int $quantity, float $price) : bool
    {

        $productModel = Product::find($productId);

        $product = [
            'id' => $productId,
            'name' => $productName,
            'price' => $price,
            'amount' => $quantity,
            'image' => $productModel->imagen
        ];

        $position = $this->findInCart($productId);

        if ( $position === false ) {
            $this->cartData[] = $product;
        } else {
            $this->cartData[$position]['amount'] = $quantity;
        }


        $json = json_encode($this->cartData);
        session(['cart' => $json]);

        return true;
    }

    public function showCart()
    {
        return $this ->cartData;
    }

    public function emptyCart()
    {
        $this->cartData = [];
        $this->cartExists = false;
        session(['cart' => []]);
    }

    private function findInCart($id)
    {
        $i = 0;
        $array = $this->cartData;
        foreach($array as $data) {
            if($data['id'] == $id) return $i;
            $i++;
        }
        return false;
    }

    public function removeFromCart($id) : bool
    {
        $position = $this->findInCart($id);
        if($position) unset($this->cartData[$position]);

        return true;
    }
}
