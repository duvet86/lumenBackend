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
    return $app->version();
});

$app->post('api/login', 'AuthController@postLogin');

$app->group(['middleware' => 'auth:api', 'prefix' => 'api', 'namespace' => 'App\Http\Controllers'], function($app) {  
    
    $app->get('user', 'AuthController@getUserInfo');
    $app->get('validateToken', 'AuthController@getValidateToken');
    
    $app->get('article','ArticleController@index');
    $app->get('article/{id}','ArticleController@getArticle');
    $app->post('article','ArticleController@saveArticle');
    $app->put('article/{id}','ArticleController@updateArticle');
    $app->delete('article/{id}','ArticleController@deleteArticle');
    
    $app->get('book','BookController@index');
    $app->get('book/{id}','BookController@getbook');  
    $app->post('book','BookController@createBook');
    $app->put('book/{id}','BookController@updateBook');
    $app->delete('book/{id}','BookController@deleteBook');
    
});
