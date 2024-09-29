<?php

use Illuminate\Support\Facades\Route;

//Route::get('/', function () {
//    return view('welcome');
//});



Route::view('/', 'welcome');

Route::resource("productos", App\Http\Controllers\ProductoController::class);


