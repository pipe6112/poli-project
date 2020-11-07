<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'LandingController@index');


Auth::routes();

Route::middleware(['auth'])->group(function (){
    Route::get('/home', 'HomeController@index')->name('home');

    Route::resource('categorias', 'CategoriaController');

    Route::resource('personas', 'PersonaController');


 // Ruta Producto

    Route::get('/producto', 'ProductoController@index');
    Route::get('/producto/listar', 'ProductoController@listar');
    Route::get('/producto/crear', 'ProductoController@create'); 
    Route::post('/producto/guardar', 'ProductoController@save'); 
    Route::get('/producto/editar/{id}', 'ProductoController@edit'); 
    Route::post('/producto/actualizar', 'ProductoController@update'); 
    Route::get('/producto/cambiar/estado/{id}/{estado}', 'ProductoController@updateState');

 // Ruta Agenda   
    Route::get('/agenda', 'AgendaController@index');
    Route::get('/agenda/listar', 'AgendaController@listar');
    Route::get('/agenda/crear', 'AgendaController@create'); 
    Route::post('/agenda/guardar', 'AgendaController@save'); 
    Route::get('/agenda/editar/{id}', 'AgendaController@edit'); 
    Route::post('/agenda/actualizar', 'AgendaController@update'); 
    Route::get('/agenda/cambiar/estado/{id}/{estado}', 'AgendaController@updateState');
    
 

    Route::get('/pdfProductos', 'PDFController@PDFProductos');
        
});


