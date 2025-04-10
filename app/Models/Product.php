<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        "nombre",
        "descripcion",
        "existencia",
        "status",
        "precio",
        "imagen",
        "categoria_id",
    ];

    public function sales(): BelongsToMany
    {
        return $this ->belongsToMany(Sale::class, "items_in_sale", "product_id", "sale_id");
    }
}
