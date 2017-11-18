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

//Rutas de la web interna
//Route::resource('clubs', 'ClubController');
//Route::resource('languages', 'LanguageController');
Route::get('/', 'HomeController@welcome'); 
//Rutas de la parte privada
Route::group(['prefix' => 'private'], function()
{
    Route::get('/', function () {
        return view('private.welcome');
    });
    Route::resource('clubs', 'ClubController');
    Route::resource('languages', 'LanguageController');
});