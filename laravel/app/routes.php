<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('hello');
});


Route::get('users',function(){
   
    $users = user::all();
    
    return View::make('users')->with('users',$users);
    
});

Route::get('authors', array('as'=>'authors', 'uses'=>'AuthorsController@get_index'));

Route::get('authors/new', array('as'=>'new_author', 'uses'=>'AuthorsController@get_new'));

Route::post('authors/create', array('uses'=> 'AuthorsController@post_create'));

Route::get('author/{id}', array('as'=>'author', 'uses'=>'AuthorsController@get_view'));

Route::get('author/{id}/edit', array('as'=>'edit', 'uses'=>'AuthorsController@edit'));

Route::put('author/update', array('uses'=>'AuthorsController@update'));

Route::delete('author/delete', array('uses'=>'AuthorsController@destroy'));