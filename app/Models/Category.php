<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Category extends Model
{
    use HasFactory;

    public static function validate($request)
    {
        $request->validate([
            "name" => "required|max:10",
        ]);
    }

    public function products(): HasMany
    {
        // Una categoria puede estar en varios productos
        return $this->hasMany(Product::class);
    }
}
