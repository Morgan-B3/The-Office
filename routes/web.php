<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AccueilController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', function () {
    return view('accueil',[
        'name' => 'Toto',
    ]);
});
Route::get('/404', function () {
    return view('error');
});

Route::get('/', [AccueilController::class, 'index']);


