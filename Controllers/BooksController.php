<?php

namespace App\Controllers;
use App\Models\Book;

class BooksController extends BaseController {

    public static function index() {
        $search = $_GET['search'] ?? '';

        $books = Book::search($search);


        self::loadView( '/books/books', [ 
            'title' => 'Books Page',
            'books' => $books,
            'search' => $search
        ]);
    }
    public static function add() {
        $search = $_GET['search'] ?? '';

        self::loadView('books/add', [
            'search' => $search

        ]);
    }
    
    public static function save() {

        $book = new Book();

        $book->title = $_POST['title'];
        $book->description = $_POST['description'];
        $book->author = $_POST['author'];
        $book->publication_date = $_POST['publication_date'];
        $book->price = $_POST['price'];

        $succes = $book->save();

        if($succes) {
            parent::redirect('/');
        } else {
            echo "Error";
        }
    }

    public static function edit($id) {
        $book = Book::find($id);
        
        if (!$book) {
            echo "Boek niet gevonden";
            return;
        }

        self::loadView('/books/edit', [
            'title' => 'Edit Book',
            'book' => $book
        ]);
    }

    public static function update($id) {
        $book = Book::find($id);  // Zorg ervoor dat deze methode een array retourneert
      
        if (!$book) {
            echo "Boek niet gevonden";
            return;
        }
    
        // Werk de waarden bij in de array
        $book->title = $_POST['title'];
        $book->description = $_POST['description'];
        $book->author = $_POST['author'];
        $book->publication_date = $_POST['publication_date'];
        $book->price = $_POST['price'];
    
        $succes = $book->edit();
        if ($succes) {
            parent::redirect('/');
        } else {
            echo "Error bij het updaten van het boek";
        }
    }
    public function delete($id) {
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
}

