<?php

use App\Http\Controllers\ImageController;
use App\Http\Controllers\UsersController;
use Illuminate\Http\Request;

use Carbon\Carbon;

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

$router->get('/welcome', function () use ($router){
    return "Hello World";
});

$router->post('/register', 'UsersController@register');

$router->get('/images', 'ImageController@display');
$router->get('/images/{id}', 'ImageController@select');
$router->get('/captions/{id}', 'CaptionController@display');

// $router->get('/profile/{id}', function () use ($router){
//     return Profile::all()->where('id', '{id}');
// })

$router->group(['middleware' => 'auth'], function () use ($router) {
    $router->get('/helloUser', 'UsersController@sayHello');
    $router->post('/logout', 'UsersController@logout');
    $router->post('/captions/create', 'CaptionController@store');
    $router->put('/captions/{id}/update', 'CaptionController@update');
    
    $router->get('/api/user', function(Request $request) {
        return $request->user();
    });
});