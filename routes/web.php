<?php

use App\Helpers\CarritoCompras;
use App\Http\Controllers\VentasController;
use App\Models\ItemInSale;
use App\Models\Sale;
use Illuminate\Support\Facades\Route;
use App\Models\Product;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    $bebidas = Product::where("categoria_id", 1)->where("existencia", ">",0)->where("status", 1)->get();
    $postres = Product::where("categoria_id", 2)->where("existencia", ">",0)->where("status", 1)->get();
    $comida = Product::where("categoria_id", 3)->where("existencia", ">",0)->where("status", 1)->get();
    return view('pagina-inicio', [
        "bebidas"=> $bebidas,
        "postres"=> $postres,
        "comidas"=> $comida,
    ]);
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::group(['middleware' => ['can:crear_productos']], function(){
    Route::prefix('admin')->group(function () {
        Route::get('/create', function () {
            return view('admin.create-products');
        })->name('create-product');
    });

});

Route::group(['middleware' => ['can:editar_productos']], function(){
    Route::prefix('admin')->group(function () {
        Route::get('/list', function () {
            return view('admin.list-products');
        })->name('list-product');
    });

});

Route::group(['middleware' => ['can:editar_productos']], function(){
    Route::prefix('admin')->group(function () {
        Route::get('/edit/{id}', function () {
            return view('admin.edit-product');
        })->name('edit-product');
    });

});

Route::group(['middleware' => ['can:editar_productos']], function(){
    Route::prefix('admin')->group(function () {
        Route::get('/edit/{id}/image', function () {
            return view('admin.edit-image');
        })->name('edit-image');
    });

});

Route::group(['middleware' => ['can:realizar_compra']], function(){
    Route::prefix('cart')->group(function () {
        Route::get('/add/{id}', function () {
            return view('sales.add-item-cart');
        })->name('add-to-cart');

        Route::get('/', function () {
            return view('sales.ver-carrito');
        })->name('view-cart');


        Route::get('/empty', function () {
            $carrito = new CarritoCompras();
            $carrito -> emptyCart();
            return redirect("/");
        })->name('empty-cart');

        Route::get('/sale', VentasController::class)->name('saleCart');

        Route::get('/showSale/{id}', function ($id) {

            $sale = Sale::find($id);
//            dd($sale);

            $items = $sale->items;
            $total = 0;

            foreach ($items as $item){
                $cantidad = $item -> pivot ->cantidad;
                $precio = $item -> pivot -> precio;
                $total+= $cantidad*$precio;
            }

            return view('sales.ver-venta-view', [
                "items"=>$items,
                "total"=>$total
            ]);
        })->name('view-sale');
    });

});
