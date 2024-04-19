<?php

use App\Http\Controllers\RecursoController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\FrontController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get ('/relat', function(){
    return view('relat');
   });

Route::get ('/lista', function() {
    return view('clinica-veterinaria');
});

Route::get('/edit/{id}', [RecursoController::class, 'atualizarInfo']);

Route::get('/form', [RecursoController::class, 'criarNovo']);

   Route::get('/', [HomeController::class, 'index']);
   Route::get('/front', [FrontController::class, 'index']);

