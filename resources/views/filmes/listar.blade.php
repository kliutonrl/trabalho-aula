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
                height: 100vh;
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
                     
                    <hr><a href="/conteudo">Home</a>
                    <hr><a href="{{route('filmes.novo')}}">Cadastrar Filme</a>  
                    <hr><a href="/login">Sair</a><hr>
                    <ul>
                    <i><h2>Bem vindo {{session('usuario')}}<h2></i>
                    </ul>
                </div>


                

            <div class="content">
                <div class="title m-b-md">
                    Enter+
                </div>




@section('conteudo_principal')
   
    <h1>Filmes</h1>
                

			<table class="table table-hover">
			    <thead>
			      <tr>
			        <th>Título</th>
                    <th>Ano</th>
                    <th>Duração</th>
                    <th>Classificação</th>
                    <th>Categoria</th>
			        <th width="10%">Opções</th>
			      </tr>
			    </thead>
			    
			    <tbody>
					@foreach ($filmes as $filme)
					<tr>
						<td>{{$filme['titulo']}}</td>
						<td>{{$filme['ano']}}</td>
                        <td>{{$filme['duracao']}}</td>
                        <td>{{$filme['classificacao']}}</td>
                        <td>{{$filme['categoria']}}</td>
						<td>
							<a href="{{route('filmes.visualizar', ['id' => $filme['id']])}}">Visualizar</a>
							<a href="{{route('filmes.editar', ['id' => $filme['id']])}}">Editar</a>
							<a href="{{route('filmes.excluir', ['id' => $filme['id']])}}">Excluir</a>
						</td>
					</tr>	
					@endforeach	 
			    </tbody>
			    
			</table>
	</div>
</body>
</html>
