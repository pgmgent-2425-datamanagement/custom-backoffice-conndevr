<?php

namespace App\Controllers;

use App\Models\Book;
use App\Models\Category;

class BooksController extends BaseController
{

    public static function index()
    {
        $search = $_GET['search'] ?? '';

        $books = Book::search($search);


        self::loadView('/books/books', [
            'title' => 'Books Page',
            'books' => $books,
            'search' => $search
        ]);
    }
    public static function add()
    {
        $search = $_GET['search'] ?? '';
        $categories = Category::all();

        self::loadView('books/add', [
            'search' => $search,
            'categories' => $categories

        ]);
    }

    public static function save()
    {


        $imgName = $_FILES['image_path']['name'];
        $tmp = $_FILES['image_path']['tmp_name'];
        $to_folder = BASE_DIR . '/public/images/';


        $uuid = uniqid() . '-' . $imgName;

        move_uploaded_file($tmp,  $to_folder . $uuid);

        $book = new Book();


        $book->title = $_POST['title'];
        $book->description = $_POST['description'];
        $book->author = $_POST['author'];
        $book->publication_date = $_POST['publication_date'];
        $book->price = $_POST['price'];
        $book->image_path = $uuid;

        $book->category_id = $_POST['category_id'];

        $succes = $book->save();

        if ($succes) {
            parent::redirect('/');
        } else {
            echo "Error";
        }
    }

    public static function edit($id)
    {
        $book = Book::find($id);
        $categories = Category::all();

        if (!$book) {
            echo "Boek niet gevonden";
            return;
        }

        self::loadView('/books/edit', [
            'title' => 'Edit Book',
            'book' => $book,
            'categories' => $categories
        ]);
    }

    public static function update($id)
    {
        $book = Book::find($id);
    
        if (!$book) {
            echo "Boek niet gevonden";
            return;
        }
    
        if (isset($_FILES['image_path']) && $_FILES['image_path']['error'] === UPLOAD_ERR_OK) {
    
            $imgName = $_FILES['image_path']['name'];
            $tmp = $_FILES['image_path']['tmp_name'];
            $to_folder = BASE_DIR . '/public/images/';
    
            $uuid = uniqid() . '-' . $imgName;
    
            move_uploaded_file($tmp, $to_folder . $uuid);
    
            $book->image_path = $uuid;
        }
    
        $book->title = $_POST['title'];
        $book->description = $_POST['description'];
        $book->author = $_POST['author'];
        $book->publication_date = $_POST['publication_date'];
        $book->price = $_POST['price'];
        $book->category_id = $_POST['category_id'];
    
        $succes = $book->edit();
        if ($succes) {
            parent::redirect('/');
        } else {
            echo "Error bij het updaten van het boek";
        }
    }
    

    
    public function delete($id)
    {
        $book = Book::find($id);

        if ($book) {
            $book->delete();

            $_SESSION['message'] = 'Book deleted successfully.';
        } else {
            $_SESSION['error'] = 'Book not found.';
        }

        parent::redirect('/');
        exit();
    }

    public static function file()
    {
        $file = scandir(BASE_DIR . '/public/images/');
        self::loadView('books/filemanager', [
            'file' => $file
        ]);
    }

    public static function get_books()
    {
        $books = Book::all();
        header("Content-type:application/json");

        echo json_encode($books);


        exit;
    }

    public static function stats()
    {
        $bookInstance = new Book();
        
        $categories = $bookInstance->getBooksPerCategory();
        
        $books = Book::all(); 
        
        self::loadView('books/stats', [
            'categories' => $categories,
            'books' => $books 
        ]);
    }
    
    
}
