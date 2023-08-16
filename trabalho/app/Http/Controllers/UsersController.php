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

    public function login(){
        return view('filmes.login');
    }

    public function cadastro(){
        return view('filmes.cadastro');
    }

    public function admin(){
        return view('filmes.admin');
    }

    public function adfilme(){
        return view('filmes.adfilme');
    }

    public function edfilme(){
        return view('filmes.edfilme');
    }

    public function deleteUser(){

    }

    public function editUser(){

    }



}
