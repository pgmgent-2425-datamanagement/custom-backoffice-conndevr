<?php

namespace App\Controllers;
use App\Models\Book;

class BooksController extends BaseController {

    public function index() {

        $books = Book::all();


        self::loadView( '/books/books', [ 
            'title' => 'Books Page',
            'books' => $books
        ]);
    }
}

