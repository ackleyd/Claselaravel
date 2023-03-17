<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Table_HerosController;
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
    $variable = "Hola soy una variable";
    $variable2 = "Variable";
    return view('welcome', compact('variable','variable2'));
})->name('welcome') ;

Route::get('/example', function () {
    $page_title = "Example View";
    return view('example', compact('page_title'));
}) ->name('example');

//Route::get('/heros', function () {}) ->name('heros');
Route::get('/heros', [Table_HerosController::class, 'index'])->name('heros');

Route::get('/heros_women', [Table_HerosController::class, 'index_wom'])->name('heros_women');

Route::get('/heros_men', [Table_HerosController::class, 'index_men'])->name('heros_men');