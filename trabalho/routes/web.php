<?php

use App\Http\Controllers\FilmesController;
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
    return view('welcome');
});
Route::get('/filmes', [FilmesController::class, 'index'])->name('filmes');

Route::get('/filmes/addfilme', [FilmesController::class, 'addfilme'])->name('filmes.addfilme');

Route::post('/filmes/add', [FilmesController::class, 'addSave'])->name('filmes.addSave');

Route::get('/filmes/{filme}', [FilmesController::class, 'infofilme'])->name('filmes.infofilme');

Route::get('/filmes/edit/{filme}', [FilmesController::class, 'edit'])->name('filmes.edit');

Route::post('/filmes/edit/{filme}', [FilmesController::class, 'editSave'])->name('filmes.editSave');

Route::get('/filmes/delete/{filme}', [FilmesController::class, 'delete'])->name('filmes.delete');

Route::delete('/filmes/delete/{filme}', [FilmesController::class, 'deleteForReal'])->name('filmes.deleteForReal');
