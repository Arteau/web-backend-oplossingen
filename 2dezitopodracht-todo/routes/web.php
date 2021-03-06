<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|


Route::get('/users/{id}', function($id){
    return "this is user ".$id;
});
*/

Route::get('/', 'PagesController@index');
Route::get('/dashboard', 'DashboardController@index');
Route::get('/todo', 'TodosController@index');
Route::get('/todo/toggle/{id}', 'TodosController@Toggle');
Route::get('/todo/delete/{id}', 'TodosController@Delete');


Route::resource('posts', 'PostsController');
Route::resource('todos', 'TodosController');




Auth::routes();

Route::get('/dashboard', 'DashboardController@index');
