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
//Rutas de la web pública
Route::get('/', 'HomeController@index'); 
/*
 * Rutas de login
 */
Auth::routes();

//Rutas de la parte privada
Route::group(['middleware'=> 'auth', 'prefix' => 'private'], function()
{
    Route::get('/', 'HomeController@indexPrivate');
    Route::resource('clubs', 'ClubController');
    Route::resource('languages', 'LanguageController');
});

//Route::get('/home', 'HomeController@index')->name('home');
