<?php

namespace App\Controllers;
use App\Models\Category;

class CategoryController extends BaseController {

    public static function index() {

        $search = $_GET['search'] ?? '';

        $categories = Category::search($search);

        self::loadView('/category/categoryPage', [
            'title' => 'Category Page',
            'categories' => $categories,
            'search' => $search
        ]);
    }

    public static function add() {

        self::loadView('category/add', [

        ]);
    }
    public static function save() {

        $category = new Category();

        $category->name = $_POST['name'];
       

        $succes = $category->save();

        if($succes) {
            parent::redirect('/categories');
        } else {
            echo "Error";
        }
    }
    public static function edit($id) {
        $category = Category::find($id);
        
        if (!$category) {
            echo "category niet gevonden";
            return;
        }

        self::loadView('/category/edit', [
            'title' => 'Edit category',
            'category' => $category
        ]);
    }

    public static function update($id) {
        $category = Category::find($id);
      
        if (!$category) {
            echo "category niet gevonden";
            return;
        }
    
        $category->name = $_POST['name'];
    
    
        $succes = $category->edit();
        if ($succes) {
            parent::redirect('/categories');
        } else {
            echo "Error bij het updaten van de category";
        }
    }

    public function delete($id) {
        $category = Category::find($id);
        
        if ($category) {
            $category->delete();

            $_SESSION['message'] = 'category deleted successfully.';
        } else {
            $_SESSION['error'] = 'category not found.';
        }
        
        parent::redirect('/categories');
        exit();
    }
}
