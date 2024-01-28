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

Route::get('/', function () {   
    return view('Studio');   
})->name('studio');

Route::get('/servizi', function () {   
    return view('Servizi');   
})->name('servizi');

Route::get('/contatti', function () {   
    return view('Contatti');   
})->name('contatti');

Route::get('/chi_siamo', function () {
    return view('About us');
})->name('noi');