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

	<!-- BARRA DE NAVEGAÇÃO -->
	<nav class="navbar navbar-inverse navbar-fixed-top">
		<div class="container-fluid">
			<ul class="nav navbar-nav">
		
				<!-- SEÇÃO FILMES -->
				<li class="dropdown active">
					<a class="dropdown-toggle" data-toggle="dropdown" data-target="#" href="#">Filmes<span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li class="@yield('menu_listar')"><a href="{{route('filme.listar')}}">Listar</a></li>
						<li class="@yield('menu_cadastrar')"><a href="{{route('filme.novo')}}">Cadastrar</a></li>
					</ul>
				</li> 
			</ul>
			<ul class="nav navbar-nav navbar-right">
				<li><a href="{{url('logout')}}"><span class="glyphicon glyphicon-log-in"></span> Sair </a></li>
			</ul>
		</div>
	</nav><br/><br/>
	<!-- FIM BARRA DE NAVEGAÇÃO -->
	
	<div class="container">
	<!-- CONTEUDO PRINCIPAL [INICIO] -->
    @yield('conteudo_principal')
    <!-- CONTEUDO PRINCIPAL [FIM] -->
</div>
	
<br/>
</body>
</html>