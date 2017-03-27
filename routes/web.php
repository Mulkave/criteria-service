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

Route::get('/criteria/facebook', 'FacebookController@all');
Route::get('/criteria/facebook/genders', 'FacebookController@genders');
Route::get('/criteria/facebook/regions', 'FacebookController@regions');
Route::get('/criteria/facebook/countries', 'FacebookController@countries');
Route::get('/criteria/facebook/interests', 'FacebookController@interests');
Route::get('/criteria/facebook/age-groups', 'FacebookController@ageGroups');

Route::get('/criteria/trellis/interests/facebook', 'FacebookController@trellisFacebookInterests');
Route::get('/criteria/trellis/interests/{id}/facebook', 'FacebookController@trellisFacebookInterest');
