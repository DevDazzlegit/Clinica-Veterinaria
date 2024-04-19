<?php

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

   use App\Http\Controllers\HomeController;
   use App\Http\Controllers\FrontController;
   
   Route::get('/', [HomeController::class, 'index']);
   Route::get('/front', [FrontController::class, 'index']);
