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
Route::group(['prefix' => 'guardian', 'middleware' => 'auth'], function () {
    Route::resource('parent', 'FrontendController');
    Route::resource('/home', 'HomeController');
    Route::post('code','FrontendController@code');
    Route::get('comportement/{id}','FrontendController@getBehavior');
    Route::get('enfant/{id}','BehaviorController@show');

});
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');
Auth::routes();


