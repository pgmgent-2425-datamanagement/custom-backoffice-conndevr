<?php

//$router->get('/', function() { echo 'Dit is de index vanuit de route'; });
$router->setNamespace('App\Controllers');
$router->get('/', 'BooksController@index');

$router->get('/add', 'BooksController@add');
$router->post('/add', 'BooksController@save');

$router->get('/edit/(\d+)', 'BooksController@edit');
$router->post('/update/(\d+)', 'BooksController@update');
$router->post('/delete/(\d+)', 'BooksController@delete');

$router->get('/categories', 'CategoryController@index');
$router->get('/categories/add', 'CategoryController@add');
$router->post('/categories/add', 'CategoryController@save');
$router->get('/category/edit/(\d+)', 'CategoryController@edit');
$router->post('/category/update/(\d+)', 'CategoryController@update');
$router->post('/category/delete/(\d+)', 'CategoryController@delete');

$router->get('/filemanager', 'BooksController@list');
