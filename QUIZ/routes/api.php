<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('questions', 'QuestionsController@index');
 
Route::get('questions/{question}', 'QuestionController@show');
 
Route::post('questions','QuestionsController@store');
 
Route::put('questions/{question}','QuestionsController@update');
 
Route::delete('questions/{question}', 'QuestionsController@delete');

Route::get('answers', 'AnswersController@index');
 
Route::get('answers/{answer}', 'AnswersController@show');
 
Route::post('answers','AnswersController@store');
 
Route::put('answers/{answer}','AnswersController@update');
 
Route::delete('answers/{answer}', 'AnswersController@delete');