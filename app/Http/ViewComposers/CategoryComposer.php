<?php

namespace App\Http\ViewComposers;

use Illuminate\View\View;
use App\Models\Category;

// Vamos a usar un view composer para poder obtener las categorias
// en el layout app, para que cuando añadamos o actualicemos las categorias
// automaticamente se modifique el navbar y el contenido dentro del dropdown
// de categorias
class CategoryComposer
{
    public function compose(View $view)
    {
        // Obtiene todas las categorías
        $categories = Category::all();

        // Pasa las categorías a la vista
        $view->with('categories', $categories);
    }
}
