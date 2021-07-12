<?php

use Illuminate\Support\Facades\Route;




Auth::routes();

Route::group(['prefix'=>'admin','middleware' => 'auth'], function(){
    // ruta de administracion
    
    Route::resource('/configuracion', App\Http\Controllers\Admin\ConfiguracionController::class);  
    Route::resource('/categoria', App\Http\Controllers\Admin\CategoriaController::class); 
    Route::resource('/producto', App\Http\Controllers\Admin\ProductoController::class);     
    Route::resource('/post', App\Http\Controllers\Admin\PostController::class);  
    Route::resource('/carrusel', App\Http\Controllers\Admin\CarruselController::class);
    Route::resource('/empresa', App\Http\Controllers\Admin\EmpresaController::class);    
    Route::resource('/joyas', App\Http\Controllers\Admin\JoyasController::class); 
    Route::resource('/Testimonios', App\Http\Controllers\Admin\TestimonioController::class);  
    Route::resource('/evento', App\Http\Controllers\Admin\EventoController::class);  
    Route::resource('/carruselgaleria', App\Http\Controllers\Admin\CarruselGaleriaController::class);
});


// rutas publicas
Route::resource('/Email', App\Http\Controllers\Admin\EmailController::class);  
Route::resource('/eventos',App\Http\Controllers\Admin\EmailController::class);  
Route::get('/', [App\Http\Controllers\FrontController::class, 'index']);
Route::get('/empresa', [App\Http\Controllers\FrontController::class, 'empresa']);
Route::get('/bele', [App\Http\Controllers\FrontController::class, 'bele']);
Route::get('/bele/{categoria}', [App\Http\Controllers\FrontController::class, 'categoria']);
Route::get('/bele/{categoria}/{producto}', [App\Http\Controllers\FrontController::class, 'producto']);
Route::get('/blog', [App\Http\Controllers\FrontController::class, 'blog']);
Route::get('/blog/{post}', [App\Http\Controllers\FrontController::class, 'post']);
Route::get('/contacto', [App\Http\Controllers\FrontController::class, 'contacto']);
Route::post('/contacto', [App\Http\Controllers\FrontController::class, 'contactoenvio']);

Route::get('/unete', [App\Http\Controllers\FrontController::class, 'unete']);
Route::get('/galeria', [App\Http\Controllers\FrontController::class, 'galeria']);
Route::get('/eventos', [App\Http\Controllers\FrontController::class, 'eventos']);
