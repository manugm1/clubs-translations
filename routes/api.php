<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('pruebas', function(){
    //$club = App\Club::find(25);
    //$club->name = "Barcelona";
    //$club->manager = "Guardiola";
    //$club->save();
    //$club->translation('en')->first()->description = "El Real Madrid CF.";
    //$club->translation('en')->first()->descripcion = "";
    //$club->translation()->first()->update([]);
    //return $club;
});
