<?php
use App\Http\Controllers\UsersController;
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
//Route::get('/index', [UsersController::class, 'createUser'])->name('create.user');

Route::get('/index', [UsersController::class, 'index'])->name('index');

Route::get('/cadastro', [UsersController::class, 'cadastro'])->name('cadastro');
