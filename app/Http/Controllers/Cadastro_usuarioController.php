<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;

class Cadastro_usuarioController extends Controller {
    
    public function cadastro_usuario() {
        return view('cadastro_usuario');
    }

    public function cadastrar(Request $request ) {
            $request->validate([
                'nome' => 'required',
                'cpf' => 'required|integer',
                'email' => 'required',
                'senha' => 'required',
                'telefone' => 'required|integer',
            
            ]);

            $cliente = new Cliente;
            $cliente->nome = $request->nome;
            $cliente->cpf = $request->cpf;
            $cliente->email = $request->email;
            $cliente->senha = $request->senha;
            $cliente->telefone = $request->telefone;
            $cliente->save();

        return redirect()->route('cadastro_usuario.cadastrar_plano');
    }

    public function cadastrar_plano() {
        return view('cadastrar_plano');
    }

}