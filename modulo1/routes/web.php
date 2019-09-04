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

Route::get('hola-mundo',function(){
    return 'Hola esto es una prueba de una ruta basica usando LARAVEL';
});

Route::post('/hola-mundo',function(){
    return 'Hola esto es una prueba de una ruta basica usando LARAVEL';
});
//Route::match(['get','post'],'contacto',function(){
//    return view('contacto');
//});

Route::get('/contacto/{nombre?}',function($nombre="Victor"){
    return view('contacto.contacto',Array(
        "nombre"=>$nombre
    ));
});

?>
