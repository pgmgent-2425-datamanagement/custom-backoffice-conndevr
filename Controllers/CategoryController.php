<?php

namespace App\Controllers;
use App\Models\Category;

class CategoryController extends BaseController {

    public static function index() {

        $search = $_GET['search'] ?? '';
        // Zorg ervoor dat viewPath correct is ingesteld
        $categories = Category::search($search);

        // Laad de view voor klanten
        self::loadView('/category/categoryPage', [
            'title' => 'Category Page',
            'categories' => $categories,
            'search' => $search
        ]);
    }

}
