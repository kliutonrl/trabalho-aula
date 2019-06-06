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
                height: 145vh;
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
	<div class="jumbotron">
            
		<div class="page-header">
        
            <img class="imagem-fcapa" src="https://image.tmdb.org/t/p/w300/xRhseqaIwhLPk6VybqmbbvL2M1p.jpg">
            <h1>{{$filmes['titulo']}}</h1><p>
            <a href="{{url('storage\Filme\Aquaman.mp4')}}">ASSISTIR FILME |</a>
            <a href="{{url('storage\Filme\trailerAquaman.mp4')}}">| ASSISTIR TRAILER</a><p>                           
    		<span class="label label-primary">{{$filmes['ano']}}</span><p>
            <span class="label label-default">{{$filmes['categoria']}}</span> 
            
        </div>
        		
		<div id="resumo-filme">
			<p>{{$filmes['resumo']}}</p>
		</div>
	</div>
