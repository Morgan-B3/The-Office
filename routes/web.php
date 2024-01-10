<?php

use App\Http\Controllers\ContactController;

use App\Http\Controllers\UserController;

use App\Http\Controllers\ListeController;

use Illuminate\Support\Facades\Route;



Route::get('salles',[ListeController::class, 'index']);
Route::get('salle/{id}', [ListeController::class, 'show']);

Route::get('/', function () {
    return view('welcome');
});

Route::post('/formulaire', function(){
    return view('formulaire');
});

Route::post('/ajouter', [ContactController::class, 'enregistrer'])->name('ajouter_contact');

Route::get('/hello', function () {
    return view('hello',[
        'name' => 'Toto',

    ]);
});


//Inscription
Route::get('/inscription', [UserController::class, 'create']);
Route::post('/inscription', [UserController::class, 'register']);

//Connexion
Route::get('/connexion', [UserController::class, 'login']);
Route::post('/connexion', [UserController::class, 'authenticate']);

