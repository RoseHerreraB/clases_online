<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductoController;

//Route::get('/', function () {
//    return view('welcome');
//});



Route::view('/', 'welcome');

Route::resource("productos", App\Http\Controllers\ProductoController::class);



