<?php

use App\Http\Controllers\CursoController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, "show"]);

## Crud : Create, Read, Update, Delete
Route::controller(PostController::class)->group(function (){
    Route::get('/posts/create', "create");
    Route::get('/posts/{id}', "show");  
    Route::post('/posts', "store");
    Route::get('/posts/{id}/edit', "edit");
    Route::patch('/posts/{id}', "update");
    Route::delete('/posts/{id}', "destroy");
});

## Con Prefix

/* Route::prefix('/company')->group(function(){
    Route::get('/nosotros/{id}', function ( ){
        return request()->segment(2);
    });
    
    Route::get('/contacto', function (){
        return 'Hola';
    });
}); */

## Sin Prefix

/* Route::get('/company/nosotros/{id}', function ( ){
    return request()->segment(2);
});

Route::get('/company/contacto', function (){
    return 'Hola';
}); */
