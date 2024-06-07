<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Product extends Model
{
    use HasFactory;

    public static function validate($request)
    {
        $request->validate([
            "name" => "required|max:255",
            "description" => "required",
            "price"  => "required|numeric|gt:0",
            "image" => "image",
        ]);
    }

    public static function sumPricesByQuantities($products, $productsInSession)
    {
        $total = 0;
        foreach ($products as $product) {
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
