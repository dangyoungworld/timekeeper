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
Route::get('profile/{id}', 'UserController@showProfile');

Route::group(['prefix' => 'admin', 'middleware' => ['before','after']], function(){
    Route::get('dashboard',['as' => 'dashboard', function(){
        echo '<h1>Dashboard!!!!</h1>';
        $url = Route::current();
        var_dump($url->getActionName());
    }]);
    Route::get('index',['as' => 'index', function(){
        echo '<h1>Index!!!!</h1>';
    }]);

});