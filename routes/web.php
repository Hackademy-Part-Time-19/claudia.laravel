<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/welcome', function () {   
    return view('Welcome');   
});


Route::get('/studio_c', function () {   
    return view('Studio C.');   
});

Route::get('/servizi', function () {   
    return view('Servizi');   
});

Route::get('/contatti', function () {   
    return view('Contatti');   
});