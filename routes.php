<?php

//$router->get('/', function() { echo 'Dit is de index vanuit de route'; });
$router->setNamespace('App\Controllers');
$router->get('/', 'BooksController@index');
$router->get('/categories', 'CategoryController@index');