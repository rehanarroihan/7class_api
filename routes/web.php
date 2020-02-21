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

$router->group(['prefix' => 'v1/user'], function () use ($router) {
    $router->post('register', ['uses' => 'UsersController@emailRegistration']);
    $router->post('auth', ['uses' => 'UsersController@emailLogin']);
});
