<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ItemInSale extends Model
{
    use HasFactory;
    protected $table = "items_in_sale";
    protected $fillable = [
        'sale_id',
        'product_id',
        'cantidad',
        'precio',
        'impuesto',
        'total',
    ];

}
