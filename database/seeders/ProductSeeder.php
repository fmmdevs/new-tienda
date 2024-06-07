<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Women T-shirts black
        Product::create([
            'name' => 'Black One',
            'description' => 'Bueno',
            'image' => 'img/women/black-1.jpeg',
            'price' => 10,
            'category_id' => 2
        ]);
        Product::create([
            'name' => 'Black Two',
            'description' => 'Bueno',
            'image' => 'img/women/black-2.jpeg',
            'price' => 10,
            'category_id' => 2
        ]);
        Product::create([
            'name' => 'Black Three',
            'description' => 'Bueno',
            'image' => 'img/women/black-3.jpeg',
            'price' => 10,
            'category_id' => 2
        ]);
        Product::create([
            'name' => 'Black Four',
            'description' => 'Bueno',
            'image' => 'img/women/black-4.jpeg',
            'price' => 10,
            'category_id' => 2
        ]);

        // Women T-shirts grey
        Product::create([
            'name' => 'Grey One',
            'description' => 'Bueno',
            'image' => 'img/women/grey-1.jpeg',
            'price' => 10,
            'category_id' => 2
        ]);
        Product::create([
            'name' => 'Grey Two',
            'description' => 'Bueno',
            'image' => 'img/women/grey-2.jpeg',
            'price' => 10,
            'category_id' => 2
        ]);
        Product::create([
            'name' => 'Grey Three',
            'description' => 'Bueno',
            'image' => 'img/women/grey-3.jpeg',
            'price' => 10,
            'category_id' => 2
        ]);
        Product::create([
            'name' => 'Grey Four',
            'description' => 'Bueno',
            'image' => 'img/women/grey-4.jpeg',
            'price' => 10,
            'category_id' => 2
        ]);

        // Women T-shirts white
        Product::create([
            'name' => 'White One',
            'description' => 'Bueno',
            'image' => 'img/women/white-1.jpeg',
            'price' => 10,
            'category_id' => 2
        ]);
        Product::create([
            'name' => 'White Two',
            'description' => 'Bueno',
            'image' => 'img/women/white-2.jpeg',
            'price' => 10,
            'category_id' => 2
        ]);
        Product::create([
            'name' => 'White Three',
            'description' => 'Bueno',
            'image' => 'img/women/white-3.jpeg',
            'price' => 10,
            'category_id' => 2
        ]);
        Product::create([
            'name' => 'White Four',
            'description' => 'Bueno',
            'image' => 'img/women/white-4.jpeg',
            'price' => 10,
            'category_id' => 2
        ]);

        // Men T-shirts black
        Product::create([
            'name' => 'Black One',
            'description' => 'Bueno',
            'image' => 'img/men/black-1.jpeg',
            'price' => 10,
            'category_id' => 1
        ]);
        Product::create([
            'name' => 'Black Two',
            'description' => 'Bueno',
            'image' => 'img/men/black-2.jpeg',
            'price' => 10,
            'category_id' => 1
        ]);
        Product::create([
            'name' => 'Black Three',
            'description' => 'Bueno',
            'image' => 'img/men/black-3.jpeg',
            'price' => 10,
            'category_id' => 1
        ]);
        Product::create([
            'name' => 'Black Four',
            'description' => 'Bueno',
            'image' => 'img/men/black-4.jpeg',
            'price' => 10,
            'category_id' => 1
        ]);

        // Men T-shirts grey
        Product::create([
            'name' => 'Gray One',
            'description' => 'Bueno',
            'image' => 'img/men/grey-1.jpeg',
            'price' => 10,
            'category_id' => 1
        ]);
        Product::create([
            'name' => 'Gray Two',
            'description' => 'Bueno',
            'image' => 'img/men/grey-2.jpeg',
            'price' => 10,
            'category_id' => 1
        ]);
        Product::create([
            'name' => 'Gray Three',
            'description' => 'Bueno',
            'image' => 'img/men/grey-3.jpeg',
            'price' => 10,
            'category_id' => 1
        ]);
        Product::create([
            'name' => 'Gray Four',
            'description' => 'Bueno',
            'image' => 'img/men/grey-4.jpeg',
            'price' => 10,
            'category_id' => 1
        ]);

        // Men T-shirts white
        Product::create([
            'name' => 'White One',
            'description' => 'Bueno',
            'image' => 'img/men/white-1.jpeg',
            'price' => 10,
            'category_id' => 1
        ]);
        Product::create([
            'name' => 'White Two',
            'description' => 'Bueno',
            'image' => 'img/men/white-2.jpeg',
            'price' => 10,
            'category_id' => 1
        ]);
        Product::create([
            'name' => 'White Three',
            'description' => 'Bueno',
            'image' => 'img/men/white-3.jpeg',
            'price' => 10,
            'category_id' => 1
        ]);
        Product::create([
            'name' => 'White Four',
            'description' => 'Bueno',
            'image' => 'img/men/white-4.jpeg',
            'price' => 10,
            'category_id' => 1
        ]);
    }
}
