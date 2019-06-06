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

            #login {
			color: #636b6f;
			position: absolute;
			top: 60%;
			left: 25%;
			width: 50%;
		}

            .full-height {
                height: 120vh;
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
                    
                        
					<a href="/login">sair</a>
              
                </div>
         

            <div class="content">
                <div class="title m-b-md">
                    Enter+
                </div>

		<div id='conteudo_principal'>
		<h1>Cadastro de Filmes</h1>

		
		<form action="{{url('filme.novo')}}" enctype="multipart/form-data" method="get">
                    
            @csrf
			
			<div class="form-group">
				<label for="campo-titulo"></label>
				<input type="text" class="form-control" name="titulo" id="campo-titulo" placeholder="Título" required="">
            </div><p>
                    				
			<div class="form-group">
				<label for="campo-titulo"></label>
				<input type="number" class="form-control" name="ano" id="campo-ano" placeholder="Ano" required="">
            </div><p>

            <div class="form-group">
                <label for="campo-capa"></label>
                <input type="text" class="form-control" name="capa" id="campo-capa" placeholder="URL da Imagem" required="">
            </div><p>

            <div class="form-group">
                 <label for="campo-filme"></label>
                 <input type="text" class="form-control" name="filme" id="campo-filme" placeholder="URL do Filme" required="">
            </div><p>
                       
			<div class="form-group">
				<label for="campo-duracao"></label>
				<input type="number" class="form-control" name="duracao" id="campo-duracao" placeholder="Duração" required="">
			</div><p>
				
			<div class="form-group">
				<label for="campo-classificacao">Classificação:</label><p>
				<select class="form-control" name="classificacao" id="campo-classificacao">
					<option value="1">Livre</option>
					<option value="2">10 anos</option>
					<option value="3">12 anos</option>
					<option value="4">14 anos</option>
                    <option value="5">16 anos</option>
                    <option value="6">18 anos</option>
				</select>
			</div>
			
			<div class="form-group">
				<label for="campo-categoria">Categoria:</label><p>
				<select class="form-control" name="categoria" id="campo-categoria">
					<option value="1">Ação</option>
					<option value="2">Animação</option>
                    <option value="3">Aventura</option>
                    <option value="4">Comédia</option>
                    <option value="5">Comédia Romântica</option>
                    <option value="6">Drama</option>
                    <option value="7">Documentário</option>
                    <option value="8">Fantasia</option>
                    <option value="9">Faroeste</option>
					<option value="10">Ficção Científica</option>
                    <option value="11">Guerra</option>
                    <option value="12">Romance</option>
                    <option value="13">Musical</option>
                    <option value="14">Suspense</option>
                    <option value="15">Terror</option>
				</select>
			</div>
							
			<div class="form-group">
				<label for="campo-resumo">Resumo:</label><p>
				<textarea class="form-control" id="campo-resumo" name="resumo"></textarea>
			</div>
				
			<button type="submit" class="btn btn-default">Cadastrar</button>				
		</form>
