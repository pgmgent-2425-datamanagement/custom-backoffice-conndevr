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

        $succes = $book->save();

        if($succes) {
            parent::redirect(('/'));
        } else {
            echo "Error";
        }
    }
}

