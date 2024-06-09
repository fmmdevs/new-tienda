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
            'name' => 'Negro Clásico',
            'description' => 'Bueno',
            'image' => 'img/seeds/men/black-1.jpeg',
            'price' => 10,
            'category_id' => 2
        ]);
        Product::create([
            'name' => 'Tinta Negra',
            'description' => 'Bueno',
            'image' => 'img/seeds/men/black-2.jpeg',
            'price' => 10,
            'category_id' => 2
        ]);
        Product::create([
            'name' => 'Ébano Simple',
            'description' => 'Bueno',
            'image' => 'img/seeds/men/black-3.jpeg',
            'price' => 10,
            'category_id' => 2
        ]);
        Product::create([
            'name' => 'Noir Básico',
            'description' => 'Bueno',
            'image' => 'img/seeds/men/black-4.jpeg',
            'price' => 10,
            'category_id' => 2
        ]);

        // Women T-shirts grey
        Product::create([
            'name' => 'Gris Esencial',
            'description' => 'Bueno',
            'image' => 'img/seeds/men/grey-1.jpeg',
            'price' => 10,
            'category_id' => 2
        ]);
        Product::create([
            'name' => 'Plata Simple',
            'description' => 'Bueno',
            'image' => 'img/seeds/men/grey-2.jpeg',
            'price' => 10,
            'category_id' => 2
        ]);
        Product::create([
            'name' => 'Gris Clásico',
            'description' => 'Bueno',
            'image' => 'img/seeds/men/grey-3.jpeg',
            'price' => 10,
            'category_id' => 2
        ]);
        Product::create([
            'name' => 'Neblina Neutra',
            'description' => 'Bueno',
            'image' => 'img/seeds/men/grey-4.jpeg',
            'price' => 10,
            'category_id' => 2
        ]);

        // Women T-shirts white
        Product::create([
            'name' => 'Blanco Puro',
            'description' => 'Bueno',
            'image' => 'img/seeds/men/white-1.jpeg',
            'price' => 10,
            'category_id' => 2
        ]);
        Product::create([
            'name' => 'Alba Simple',
            'description' => 'Bueno',
            'image' => 'img/seeds/men/white-2.jpeg',
            'price' => 10,
            'category_id' => 2
        ]);
        Product::create([
            'name' => 'Nieve Clásica',
            'description' => 'Bueno',
            'image' => 'img/seeds/men/white-3.jpeg',
            'price' => 10,
            'category_id' => 2
        ]);
        Product::create([
            'name' => 'Lienzo Blanco',
            'description' => 'Bueno',
            'image' => 'img/seeds/men/white-4.jpeg',
            'price' => 10,
            'category_id' => 2
        ]);

        // Men T-shirts black
        Product::create([
            'name' => 'Negro Elegante',
            'description' => 'Bueno',
            'image' => 'img/seeds/women/black-1.jpeg',
            'price' => 10,
            'category_id' => 1
        ]);
        Product::create([
            'name' => 'Dama Oscura',
            'description' => 'Bueno',
            'image' => 'img/seeds/women/black-2.jpeg',
            'price' => 10,
            'category_id' => 1
        ]);
        Product::create([
            'name' => 'Noche Sencilla',
            'description' => 'Bueno',
            'image' => 'img/seeds/women/black-3.jpeg',
            'price' => 10,
            'category_id' => 1
        ]);
        Product::create([
            'name' => 'Sombra Femenina',
            'description' => 'Bueno',
            'image' => 'img/seeds/women/black-4.jpeg',
            'price' => 10,
            'category_id' => 1
        ]);

        // Men T-shirts grey
        Product::create([
            'name' => 'Gris Suave',
            'description' => 'Bueno',
            'image' => 'img/seeds/women/grey-1.jpeg',
            'price' => 10,
            'category_id' => 1
        ]);
        Product::create([
            'name' => 'Nube Neutra',
            'description' => 'Bueno',
            'image' => 'img/seeds/women/grey-2.jpeg',
            'price' => 10,
            'category_id' => 1
        ]);
        Product::create([
            'name' => 'Gris Sutil',
            'description' => 'Bueno',
            'image' => 'img/seeds/women/grey-3.jpeg',
            'price' => 10,
            'category_id' => 1
        ]);
        Product::create([
            'name' => 'Platino Simple',
            'description' => 'Bueno',
            'image' => 'img/seeds/women/grey-4.jpeg',
            'price' => 10,
            'category_id' => 1
        ]);

        // Men T-shirts white
        Product::create([
            'name' => 'Blanca Pura',
            'description' => 'Bueno',
            'image' => 'img/seeds/women/white-1.jpeg',
            'price' => 10,
            'category_id' => 1
        ]);
        Product::create([
            'name' => 'Nieve Simple',
            'description' => 'Bueno',
            'image' => 'img/seeds/women/white-2.jpeg',
            'price' => 10,
            'category_id' => 1
        ]);
        Product::create([
            'name' => 'Marfil Clásico',
            'description' => 'Bueno',
            'image' => 'img/seeds/women/white-3.jpeg',
            'price' => 10,
            'category_id' => 1
        ]);
        Product::create([
            'name' => 'Alba Elegante',
            'description' => 'Bueno',
            'image' => 'img/seeds/women/white-4.jpeg',
            'price' => 10,
            'category_id' => 1
        ]);
    }
}
