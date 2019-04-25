<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Cadastro1Controller extends Controller {
    
    public function cadastro1() {
        return view('cadastro1');
    }

    public function cadastrar(Request $request ) {
            $request->validate([
                'nome' => 'required',
                'cpf' => 'required|integer',
                'email' => 'required',
                'senha' => 'required',
                'telefone' => 'required|integer',
                'endereco' => 'required',
                'cep' => 'required|integer',
                'bairro' => 'required',
                'numero' => 'required|integer',
                'cidade' => 'required',
                'estado' => 'required'
            ]);

        return view('cadastro2');
    }

}