<?php

$router->get('books', 'BooksController@index');
$router->get('books/{id}', 'BooksController@show');
$router->post('books', 'BooksController@store');
$router->put('books/{id}', 'BooksController@update');
$router->delete('books/{id}', 'BooksController@destroy');


$router->get('authors', 'AuthorsController@index');
$router->get('authors/{id}', 'AuthorsController@show');
$router->post('authors', 'AuthorsController@store');
$router->put('authors/{id}', 'AuthorsController@update');
$router->delete('authors/{id}', 'AuthorsController@destroy');

$router->get('/', function () use ($router) {
    return $router->app->version();
});
