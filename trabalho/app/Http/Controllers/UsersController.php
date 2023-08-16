<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UsersController extends Controller
{
    public function createUser(Request $request){
        if ($request->isMethod('POST')) {
            $usr = $request->validate([
                'name' => 'string|required',
                'email' => 'email|required',
                'password' => 'string|required',
            ]);

            $usr['password'] = Hash::make($usr['password']);

            $user = User::create($usr);
            // Lança um evento Registered que vai enviar um e-mail para o usuário
            event(new Registered($user));

            return redirect()->route('login');
        }
    }

    public function index(){
        return view('filmes.index');
    }

    public function cadastro(){
        return view('filmes.cadastro');
    }

    public function deleteUser(){

    }

    public function editUser(){

    }

    public function login(){

    }

}
