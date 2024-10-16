<?php

require_once __DIR__ . '/Models/Book.php';

function getBooks($p_search) {

    //1. connectie maken met database
    $db = new PDO('mysql:host=db;dbname=db', 'db', 'db');

    //2. SQL query schrijven
    $sql = "
            SELECT * 
            FROM books
            WHERE title LIKE :b_search 
            OR description LIKE :b_search
           ";

    $statement = $db->prepare($sql);


    //5. SQL statement uitvoeren
    $statement->execute(
        [
            'b_search' => '%' . $p_search . '%'
        ]
    );
    

    //Data fetchen and casten naar book class
    $books = $statement->fetchAll(PDO::FETCH_CLASS, 'Book');
    
    return $books;

}


require_once __DIR__ . '/Models/Category.php';

function getCategories($p_search) {

    //1. connectie maken met database
    $db = new PDO('mysql:host=db;dbname=db', 'db', 'db');

    //2. SQL query schrijven
    $sql = "
            SELECT * 
            FROM categories
            WHERE name LIKE :b_search 
           ";

    $statement = $db->prepare($sql);


    //5. SQL statement uitvoeren
    $statement->execute(
        [
            'b_search' => '%' . $p_search . '%'
        ]
    );
    

    //Data fetchen and casten naar book class
    $categories = $statement->fetchAll(PDO::FETCH_CLASS, 'Customer');
    
    return $categories;

}