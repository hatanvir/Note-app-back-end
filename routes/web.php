<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () use ($router) {
    return $router->app->version();
});
$router->post('api/register', 'AuthController@register');
$router->post('api/login', 'AuthController@login');

$router->post('/api/addNote', 'DataCrudController@addNote');
$router->post('/api/updateNote/{id}', 'DataCrudController@updateNote');
$router->get('/api/getNotesByUerId/{user_id}', 'DataCrudController@getNotes');
$router->post('/api/deleteNote/{user_id}/{note_id}', 'DataCrudController@deleteNote');
