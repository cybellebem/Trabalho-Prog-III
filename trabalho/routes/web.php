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

Route::get('/logout', [UsersController::class, 'logout'])->name('logout');

Route::get('/cadastro', [UsersController::class, 'cadastro'])->name('cadastro');

Route::post('/cadastro', [UsersController::class, 'cadastro']);






Route::middleware('auth')->group(function () {

Route::get('/lista', [FilmesController::class, 'lista'])->name('lista');
Route::post('/lista', [FilmesController::class, 'lista']);
Route::get('/infofilme/{id}', [FilmesController::class, 'infofilme'])->name('infofilme');


});


Route::middleware('admin')->group(function () {
    Route::get('/admin', [FilmesController::class, 'admin'])->name('admin');
    Route::get('/exibir-adfilme', [FilmesController::class, 'exibirAdicionarFilme'])->name('exibir.adfilme');
    Route::post('/adicionar-filme', [FilmesController::class, 'adicionarFilme'])->name('adicionar.filme');
    Route::get('/adfilme', [FilmesController::class, 'adfilme'])->name('adfilme');
    Route::get('/adcategoria', [FilmesController::class, 'adcategoria'])->name('adcategoria');
    Route::post('/adicionar-categoria', [FilmesController::class, 'adicionarCategoria'])->name('adicionar.categoria');
    Route::get('/edfilme/{id}', [FilmesController::class, 'edfilme'])->name('edfilme');
    Route::post('/edfilme/{id}', [FilmesController::class, 'atualizarFilme'])->name('atualizar.filme');
    Route::patch('/atualizar-filme/{id}', [FilmesController::class, 'atualizarFilme'])->name('atualizar.filme');

    Route::delete('/apagarfilme/{id}', [FilmesController::class, 'apagarfilme'])->name('apagarfilme');
});






