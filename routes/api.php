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

Route::get('productos', function() {
    return "esta es una ruta de productos desde el archivo api";

});

Route::delete('productos', function() {
    return "esta es una ruta de productos desde el archivo api";
    
});

Route::post('productos', function() {
    return "esta es una ruta de productos desde el archivo api";
    
});

Route::put('productos', function() {
    return "esta es una ruta de productos desde el archivo api";
    
});
