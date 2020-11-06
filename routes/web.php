<?php

/** @var \Laravel\Lumen\Routing\Router $router */

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

$router->get('/login', 'LoginController@login'); 
$router->post('/result', 'LoginController@result'); 

$router->get('/users1', 'User1Controller@show');    //get all users records
$router->post('/users1', 'User1Controller@add');  //create new user
$router->get('/users1/{id}', 'User1Controller@index');   //get user id
$router->put('/users1/{id}', 'User1Controller@update');   //update user
$router->patch('/users1/{id}', 'User1Controller@update');   //update user
$router->delete('/users1/{id}', 'User1Controller@delete');  //delete

$router->get('/users2', 'User2Controller@show');    //get all users records
$router->post('/users2', 'User2Controller@add');  //create new user
$router->get('/users2/{id}', 'User2Controller@index');   //get user id
$router->put('/users2/{id}', 'User2Controller@update');   //update user
$router->patch('/users2/{id}', 'User2Controller@update');   //update user
$router->delete('/users2/{id}', 'User2Controller@delete');  //delete
