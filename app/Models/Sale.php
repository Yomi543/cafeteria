<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Sale extends Model
{
    use HasFactory;
    protected $table = "sales";
    public function items (): BelongsToMany
    {
        return $this->belongsToMany(Product::class, "items_in_sale", "sale_id", "product_id");
    }

}
