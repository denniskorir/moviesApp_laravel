<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
//refer to the url databes test
Route::get('database-test',function(){
    if (DB::connection()->getDatabaseName()){
        echo 'connected successfully to the database'
            .DB::connection()->getDatabaseName();
    }

});

Route::get('movies','movieController@index');