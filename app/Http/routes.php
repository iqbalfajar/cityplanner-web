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

Route::get('/', array(
    'as' => 'home.index',
    'uses' => 'HomeController@getIndex'
));

Route::group(array('prefix' => 'examples'), function(){
    Route::get('/', array(
        'as' => 'examples.index',
        'uses' => 'ExamplesController@getIndex'
    ));

    Route::get('/show/{type}', array(
        'as' => 'examples.show',
        'uses' => 'ExamplesController@getExamples'
    ));

});

Route::get('/app', array(
        'as' => 'app',
    ), 
    function(){
    return File::get(public_path() . '/app/index.html');
});

Route::get('/test', array(
        'as' => 'test',
    ), 
    function(){
    return File::get(public_path() . '/test/index.html');
});