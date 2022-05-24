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

$router->get('/hola', function () use ($router) {
    return $router->app->version();
});


$router->get('/saludo',function(){
    return 'hola mi nombre es cesar';
});


$router->post('/saludo',function(){
    return 'Hola estoy creando un saludo';
});
