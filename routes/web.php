<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ArticleController;
Route::get('/', function () {   
    return view('Studio');   
})->name('studio');

Route::get('/servizi', function () {   
    return view('Servizi');   
})->name('servizi');

Route::get('/contatti', function () {   
    return view('Contatti');   
})->name('contatti');

Route::get('/noi', function () {
    return view('Noi');
})->name('noi');

Route::get('/articoli', function () {
    return view('Articoli');
})->name('articoli');



Route::get('/', [PageController::class,'studio'])->name('studio');

/*Route::get('/articoli',[ArticleController::class,'index'])->name('articles.index');*/

// rotta parametrica

Route::get('/articolo/{id}',[ArticleController::class,'show'])->name('articles.show');



Route::get('/contatti',[PageController::class,'contatti'])->name('contatti');


//rotta con parametro opzionale
Route::get('/articoli/{category}',[ArticleController::class,'byCategory'])->name('articles.byCategory');