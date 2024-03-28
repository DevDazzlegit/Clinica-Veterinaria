<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get ('/relat', function(){
    return view('relat');
   });

   use App\Http\Controllers\HomeController;
   use App\Http\Controllers\FrontController;
   
   Route::get('/', [HomeController::class, 'index']);
   Route::get('/front', [FrontController::class, 'index']);
