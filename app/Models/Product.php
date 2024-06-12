<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Product extends Model
{
    use HasFactory;

    public static function sumPricesByQuantities($products, $productsInSession)
    {
        $total = 0;
        foreach ($products as $product) {
            // en el array productsInSession tenemos idProducto => cantidad
            // recorremos los productos multiplicando el precio por la cantidad y agregandoselo al total
            $total = $total + ($product->price * $productsInSession[$product->id]);
        }
        return $total;
    }

    public function category(): BelongsTo
    {
        // un producto solo tiene una categoria
        return $this->belongsTo(Category::class);
    }
}
