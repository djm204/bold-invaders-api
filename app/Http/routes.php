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

$app->get('/', function () use ($app) {
    return "Bold-Invaders WebApi";
});

$app->group(['prefix' => 'api','namespace' => 'App\Http\Controllers'], function($app)
{
    $app->get('highscores','HighScoreController@index');
  
    $app->get('highscores/{id}','HighScoreController@getHighScore');
      
    $app->post('highscores','HighScoreController@createHighScore');
            
    $app->delete('highscores/{id}','HighScoreController@deleteHighScore');
});

