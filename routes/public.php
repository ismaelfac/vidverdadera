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
*/
// Login Routes...
    Route::get('login', ['as' => 'login', 'uses' => 'Auth\LoginController@showLoginForm']);
    Route::post('login', ['as' => 'login.post', 'uses' => 'Auth\LoginController@login']);
    Route::post('logout', ['as' => 'logout', 'uses' => 'Auth\LoginController@logout']);


// Password Reset Routes...
    Route::get('password/reset', ['as' => 'password.reset', 'uses' => 'Auth\ForgotPasswordController@showLinkRequestForm']);
    Route::post('password/email', ['as' => 'password.email', 'uses' => 'Auth\ForgotPasswordController@sendResetLinkEmail']);
    Route::get('password/reset/{token}', ['as' => 'password.reset.token', 'uses' => 'Auth\ResetPasswordController@showResetForm']);
    Route::post('password/reset', ['as' => 'password.reset.post', 'uses' => 'Auth\ResetPasswordController@reset']);

Route::get('/', function(){
    return view('content');
});
Route::get('/home', 'HomeController@index');
//Location
Route::get('location', [
    'as' => 'location.index',
    'uses' => 'Location\LocationController@index'
]);
Route::get('location/{id}', [
    'as' => 'location.show',
    'uses' => 'Location\LocationController@show'
]);
//Municipality
Route::get('municipality', [
    'as' => 'municipality.index',
    'uses' => 'Municipality\MunicipalityController@index'
]);
Route::get('municipality/{id}', [
    'as' => 'municipality.show',
    'uses' => 'Municipality\MunicipalityController@show'
]);