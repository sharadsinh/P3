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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/lorem-ipsum', 'LoremIpsumController@getCreate');
// Route::get('/lorem-ipsum', 'LoremIpsumController@getLoremipsum');
Route::post('/lorem-ipsum', 'LoremIpsumController@postCreate');

Route::get('/usergenerator', 'UserGeneratorController@getCreate');
//Route::get('/usergenerator/show/{numberOfUsers}{addBirthday?}{addProfile?}', 'UserGeneratorController@getShow');
Route::post('/usergenerator', 'UserGeneratorController@postCreate');
