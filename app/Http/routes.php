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

Route::get('/about', 'AboutController@index');

Route::get('/projects', 'ProjectsController@index');

Route::get('/projects/{project}', 'ProjectsController@show');

Route::group(['middleware' => ['web']], function(){

    Route::auth();

    Route::group(['middleware' => 'auth'], function(){

        Route::get('about/getImage', 'ApiController@getImage');
        Route::get('about/{about}/getImage', 'ApiController@getImage');

        Route::get('/about/create', 'AboutController@create');
        Route::post('/about/store', ['as' => 'about.store', 'uses' => 'AboutController@store']);
        Route::get('/about/{title}/edit', 'AboutController@edit');

        Route::get('/projects/manage', 'ProjectsController@index');
        Route::post('/projects', 'ProjectsController@store');
        Route::get('/projects/create/new', 'ProjectsController@create');
        Route::put('/projects/{project}', ['as' => 'projects.update', 'uses' => 'ProjectsController@update']);
        Route::delete('/projects/{project}', ['as' => 'projects.delete', 'uses' => 'ProjectsController@destroy']);
        Route::get('/projects/{project}/edit', 'ProjectsController@edit');
        Route::get('/projects/{project}/getImage', 'ApiController@getImage');

        Route::get('/getImage/', 'ApiController@getImage');
    });
});
