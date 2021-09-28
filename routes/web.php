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


/* RUTA DESDE FUNCTION */
Route::get('/route', function () {
    return "soy un hola mundo desde una ruta";
});

/* RUTA DESDE FUNCTION */
Route::get('/funciones', function () {
    return "HOLA MUNDO";
});

/* CARPETA view/productos/product.blade */
Route::get('/view/productos/product.blade', function () {
    return view('producto/produc');
});

/* RUTA DE BLADE */
Route::get('/', function () {
    return view('mipag');
});




/*
 RUTA PRINCIPAL 
Route::get('/', function () {
    return view('mipag');
});
 RUTA DE PRODUCTOS 
Route::post('/productos', function () {
    return view('producto/produc');
});
 RUTA DESDE FUNTION 
Route::get('/funrut', function () {
    return "soy un hola mundo desde una ruta";
});
 RUTA DE BLADE 
Route::get('/producto', function () {
    return view('producto/produc');
});
*/

/* RUTA DE PRODUCTOS */
Route::post('/productos', function () {
    return view('producto/produc');
    
});

/*
Route::delete('miprimerl', function () {
    return "soy una ruta con mame";
})->name('layout');
*/
