<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

$app->get('/', function() use ($app) {
    return $app->welcome();
});

$app->get('genre', 'App\Http\Controllers\GenreController@index');
$app->get('genre/{id}', 'App\Http\Controllers\GenreController@show');

$app->get('album', 'App\Http\Controllers\AlbumsController@index');
$app->get('album/{id}', 'App\Http\Controllers\AlbumsController@show');

$app->get('artist', 'App\Http\Controllers\ArtistsController@index');
$app->get('artist/{id}', 'App\Http\Controllers\ArtistsController@show');