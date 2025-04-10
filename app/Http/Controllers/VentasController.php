<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sale;
use App\Models\ItemInSale;
use App\Helpers\CarritoCompras;

class VentasController extends Controller
{
    public function __invoke(Request $request)
    {
        $user = \Auth::user();
        $id = $user->id;

        //hacemos la venta y la guardamos en la tabla sales
        $sale = new Sale();
        $sale->user_id = $id;
        $sale->save();
        $saleId = $sale->id;

        //obtenemos los articulos del carrito
        $cart = new CarritoCompras();
        $cartData = $cart->cartData;
        $saleOverview = [];
        $itemNumber = 0;

        //guardamos los articulos incluidos en la venta
        foreach ($cartData as $data) {
            ItemInSale::create([
                'sale_id' => $saleId,
                'product_id' => $data['id'],
                'cantidad' => $data['amount'],
                'precio' => $data['price'],
                'impuesto' => 0,
                'total' => ($data['price'] * $data['amount']) * 1.16,
            ]);

//            $saleOverview[$itemNumber]['name'] = $data['name'];
//            $saleOverview[$itemNumber]['amount'] = $data['amount'];
//            $saleOverview[$itemNumber]['price'] = $data['price'];
//            $saleOverview[$itemNumber]['total'] = ($data['price'] * $data['amount']) * 1.16;
//            $itemNumber++;
        }

        $cart->emptyCart();

        return redirect('/cart/showSale/' . $saleId);

    }
}
