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
Route::post('/login', [UsersController::class, 'login'])->name('login');

Route::get('/login', [UsersController::class, 'login']);

Route::get('/cadastro', [UsersController::class, 'cadastro'])->name('cadastro');

Route::get('/lista', [FilmesController::class, 'lista'])->name('lista');

Route::post('/lista', [FilmesController::class, 'lista']);


Route::get('/infofilme', [FilmesController::class, 'infofilme'])->name('infofilme');



Route::middleware(['admin'])->group(function () {
    Route::get('/addfilme', [FilmesController::class, 'addfilme'])->name('addfilme');
    Route::get('/apagarfilme', [FilmesController::class, 'apagarfilme'])->name('apagarfilme');

});


