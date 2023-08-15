<?php

namespace App\Http\Controllers;

use App\Models\Filme;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class FilmesController extends Controller
{
    public function index() {
        $prods = Filme::all();

        return view('filmes.index', [
            'prods' => $prods,
        ]);
    }

    public function add() {
        return view('filmes.addfilme');
    }

    public function addSave(Request $form) {
        $dados = $form->validate([
            'name' => 'required|unique:produtos|min:3',
            'price' => 'required|numeric|gte:0',
            'quantity' => 'required|integer|gte:0',
        ]);

        Filme::create($dados);

        return redirect()->route('filmes')->with('sucesso', 'Produto inserido com sucesso');
    }

    public function edit(Filme $produto) {
        // Usamos a mesma view do "add"
        return view('filmes.addfilme', [
            'prod' => $produto,
        ]);
    }

    public function editSave(Request $form, Filme $produto) {
        $dados = $form->validate([
            'name' => [
                'required',
                Rule::unique('filmes')->ignore($produto->id),
                'min:3',
            ],
            'price' => 'required|numeric|gte:0',
            'quantity' => 'required|integer|gte:0',
        ]);

        $produto->fill($dados)->save();

        return redirect()->route('filmes')->with('sucesso', 'Produto alterado com sucesso');
    }

    public function view(Filme $produto) {
        return view('filmes.infofilme', [
            'prod' => $produto,
        ]);
    }

    public function delete(Filme $produto) {
        return view('filmes.apagarfilme', [
            'prod' => $produto,
        ]);
    }

    public function deleteForReal(Filme $produto) {
        $produto->delete();
        return redirect()->route('filmes')->with('sucesso', 'Produto apagado com sucesso!');
    }
}
