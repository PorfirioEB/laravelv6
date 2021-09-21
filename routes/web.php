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

Route::get('/', function () {
    return view('welcome');
});

/* RUTA PRINCIPAL */
Route::get('/', function () {
    return view('mipag');
});

/* RUTA DE PRODUCTOS */
Route::post('/productos', function () {
    return view('producto/produc');
});
/* RUTA DESDE FUNTION */
Route::put('/funrut', function () {
    return "soy un hola mundo desde una ruta";
});
/* RUTA DE BLADE */
/*Route::get('/miprimerl', function () {
    return view('child')->name('mi primer layout');
});*/

Route::delete('miprimerl', function () {
    return "soy una ruta con mame";
})->name('layout');
