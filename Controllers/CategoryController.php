<?php

namespace App\Controllers;
use App\Models\Category;

class CategoryController extends BaseController {

    public function index() {
        // Zorg ervoor dat viewPath correct is ingesteld
        $categories = Category::all();

        // Laad de view voor klanten
        self::loadView('/category/categoryPage', [
            'title' => 'Customers Page',
            'categories' => $categories
        ]);
    }

}
