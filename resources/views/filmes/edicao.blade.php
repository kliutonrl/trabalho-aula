<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Enter+</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
                        
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 900;
                height: 100vh;
                margin: 0;
            }

            .imagem-plano {
                
                float: center;
                width: 70%;
                height: 10%;
                margin-right: 5px;
                margin-bottom:20px;
            }

            .full-height {
                height: 130vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                
                position: relative;
            }

            .top-right {
                
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
              
                font-size: 84px;
            }

            .links > a {
               
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                background: url("https://png.pngtree.com/thumb_back/fw800/back_pic/00/14/95/3856767bc8aa37b.jpg");
                padding-left: 20px;
                margin-bottom: 30px;
				border-radius: 100px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
           
                <div class="top-right links">
                    				
					<a href="/cadastro">Cadastrar filme</a>
					<a href="/login">Sair</a>
              
                </div>
         

            <div class="content">
                <div class="title m-b-md">
                    Enter+
                </div>



<div id='conteudo_principal'>
		<h1>Edição de Filmes</h1>

		<!-- ERRO NO CADASTRO -->
		@if(session('erro'))
                   <div class="alert alert-danger">
					<strong>Erro!</strong> {{session('erro')}}
                </div>
                    @endif
		<!-- [FIM] ERRO -->


		<form action="" method="post">
				@csrf
			<div class="form-group">
				<label for="campo-titulo">Título:</label><p>
			<input type="text" class="form-control" name="titulo" id="campo-titulo" value="{{$filmes['titulo']}}">
			</div>
					
			<div class="form-group">
				<label for="campo-ano">Ano:</label><p>
				<input type="number" class="form-control" name="ano" id="campo-ano" value="{{$filmes['ano']}}">
			</div>
							
			<div class="form-group">
				<label for="campo-duracao">Duração em Minutos:</label><p>
				<input type="number" class="form-control" name="duracao" id="campo-duracao" value="{{$filmes['duracao']}}">
            </div>
            
            <div class="form-group">
				<label for="campo-classificacao">Classificacao Etária:</label><p>
				<select class="form-control" name="classificacao" id="campo-classisifcacao">
					<option value="1" @if($filmes['classificacao'] == 1) selected="selected" @endif>Livre</option>
					<option value="2" @if($filmes['classificacao'] == 2) selected="selected" @endif>10 Anos</option>
					<option value="3" @if($filmes['classificacao'] == 3) selected="selected" @endif>12 Anos</option>
					<option value="4" @if($filmes['classificacao'] == 4) selected="selected" @endif>14 Anos</option>
                    <option value="5" @if($filmes['classificacao'] == 5) selected="selected" @endif>16 Anos</option>
                    <option value="6" @if($filmes['classificacao'] == 6) selected="selected" @endif>18 Anos</option>
				</select>
			</div>
			
			<div class="form-group">
				<label for="campo-categoria">Categoria:</label><p>
				<select class="form-control" name="categoria" id="campo-categoria">
					<option value="1" @if($filmes['categoria'] == 1) selected="selected" @endif>Ação</option>
					<option value="2" @if($filmes['categoria'] == 2) selected="selected" @endif>Animação</option>
					<option value="3" @if($filmes['categoria'] == 3) selected="selected" @endif>Aventura</option>
					<option value="4" @if($filmes['categoria'] == 4) selected="selected" @endif>Comédia</option>
                    <option value="5" @if($filmes['categoria'] == 5) selected="selected" @endif>Comédia Romântica</option>
                    <option value="6" @if($filmes['categoria'] == 6) selected="selected" @endif>Drama</option>
                    <option value="7" @if($filmes['categoria'] == 7) selected="selected" @endif>Documentário</option>
                    <option value="8" @if($filmes['categoria'] == 8) selected="selected" @endif>Fantasia</option>
                    <option value="9" @if($filmes['categoria'] == 9) selected="selected" @endif>Faroeste</option>
                    <option value="10" @if($filmes['categoria'] == 10) selected="selected" @endif>Ficção Científica</option>
                    <option value="11" @if($filmes['categoria'] == 11) selected="selected" @endif>Guerra</option>
                    <option value="12" @if($filmes['categoria'] == 12) selected="selected" @endif>Romance</option>
                    <option value="13" @if($filmes['categoria'] == 13) selected="selected" @endif>Musical</option>
                    <option value="14" @if($filmes['categoria'] == 14) selected="selected" @endif>Suspense</option>
                    <option value="5" @if($filmes['categoria'] == 15) selected="selected" @endif>Terror</option>
                </select>
			</div>
							
			<div class="form-group">
				<label for="campo-resumo">RESUMO:</label><p>
				<textarea class="form-control" id="campo-resumo" name="resumo">{{$filmes['resumo']}}</textarea>
			</div>
				
			<button type="submit" class="btn btn-default">Editar</button>				
		</form>
