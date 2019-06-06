<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\filme; 

class FilmeController extends Controller {

    public function novo() {
        $request->validate([
            'titulo' => 'required',
            'video' => 'required',
            'capa' => 'required',
            'ano' => 'required',
            'duracao' => 'required',
            'classificacao' => 'required',
            'categoria' => 'required',
            'resumo' => 'required',
        ]);

        $filme = new filme;
            $filme->titulo = $request->titulo;
            $filme->video = $request->video;
            $filme->capa = $request->capa;
            $filme->ano = $request->ano;
            $filme->duracao = $request->duracao;
            $filme->classificacao = $request->classificacao;
            $filme->categoria = $request->categoria;
            $filme->resumo = $request->resumo;
            $filme->save();

        return view('filmes.novo');
    }

    public function listar() {
        $dados['filmes'] = [
            ['id' => '1', 'titulo' => 'Aquaman', 'ano' => '2018', 'duracao' => '144 minutos', 
            'classificacao' => '12 anos', 'categoria' => 'Ação'],
            ['id' => '2', 'titulo' => 'Pixels', 'ano' => '2015', 'duracao' => '105 minutos', 
            'classificacao' => '10 anos', 'categoria' => 'Comédia']
        ];
        return view('filmes.listar', $dados);
    }

    public function editar($id) {
        $dados = ['filmes' => [
                'titulo'      => '',
                'ano' => '',
                'duracao'    => '',
                'classificacao'     => '',
                'categoria'     => '',
                'resumo'    => ''
        ]
        ];
        
        return view('filmes.edicao', $dados);
    }

    public function visualizar($id) {
        $dados = ['filmes' => [
                    'id'        => '1',
                    'titulo'    => 'Aquaman',
                    'ano'     => '2018',
                    'categoria'     => 'Ação',
                    'resumo'    => 'Arthur Curry (Jason Momoa), mais conhecido como Aquaman, ainda é um homem 
                    solitário, mas quando ele começa uma jornada com Mera (Amber Heard), em busca de um algo 
                    muito importante para o futuro de Atlantis, ele aprende que não pode fazer tudo sozinho.',
                     
        ],

        ['id'        => '2',
        'titulo'      => 'Pixels',
        'ano' => '2015',
        'duracao'    => '105',
        'classificacao'     => '10',
        'categoria'     => 'Comédia',
        'resumo'    => 'A humanidade sempre buscou vida fora da Terra e, em busca de algum contato,
         enviou imagens e sons variados sobre a cultura terrestre nos mais diversos satélites já 
         lançados no universo. Um dia, um deles foi encontrado. Disposta a conquistar o planeta, 
         a raça alienígena resolveu criar monstros digitais inspirados em videogames clássicos dos 
         anos 1980. Para combatê-los, a única alternativa é chamar especialistas nos jogos: Sam Brenner 
         (Adam Sandler), Eddie Plant (Peter Dinklage), Ludlow Lamonsoff (Josh Gad) e a tenente-coronel 
         Violet Van Patten (Michelle Monaghan).']
        
        ];
        return view('filmes.visualizar', $dados);
    }

    public function excluir($id) {
     
    }

    public function atualizar(Request $requeste){
        $requeste->video->storeAs('public/Filme', 'Pixels.mp4');
        return redirect()->route('atualizar');
    }

}