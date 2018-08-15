<?php
/*
|--------------------------------------------------------------------------
| Auth Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
// Registration Routes...
    Route::get('register', ['as' => 'register', 'uses' => 'Auth\RegisterController@showRegistrationForm']);
    Route::post('register', ['as' => 'register.post', 'uses' => 'Auth\RegisterController@register']);


// Members
Route::get('member/create', [
    'uses' => 'Member\CreateMemberController@create',
    'as' => 'member.create',
]);
Route::post('member/create', [
    'uses' => 'Member\CreateMemberController@store',
    'as' => 'member.store',
]);
// Location
Route::get('location/create', [
    'uses' => 'Location\CreateLocationController@create',
    'as' => 'location.create',
]);
Route::post('location/create', [
    'uses' => 'Location\CreateLocationController@store',
    'as' => 'location.store',
]);
// Municipality
Route::get('municipality/create', [
    'uses' => 'Municipality\CreateMunicipalityController@create',
    'as' => 'municipality.create',
]);
Route::post('municipality/create', [
    'uses' => 'Municipality\CreateMunicipalityController@store',
    'as' => 'location.store',
]);