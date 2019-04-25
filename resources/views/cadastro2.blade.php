<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>EnterPlay[></title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
                        
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
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
                height: 110vh;
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
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
           
                <div class="top-right links">
                    
                                         
                        

                        
                            <a href="file:///C:/Users/Kliuton/Desktop/exemplo/trabalho/html/login.html">Login</a>
                        
                    
                </div>
         

            <div class="content">
                <div class="title m-b-md">
                    EnterPlay[>
                </div>
                <!-- CONTEUDO -->
        <div id='conteudo_principal'>
            
                
                    
            <div id="cadastro">
                <h1>Cadastrar</h1>
    
                                            
                <form action="{{url('plano')}}" method="post">
                    
                        @csrf
    <p>
                    <fieldset align="left">
                            <legend>Escolha seu Plano</legend>
                                                            
                                <h3>Básico</h3>
                                <p>Qualidade SD disponível</p>
                                <ul>
                                    <li>Valor R$ 15,99, com 1 tela disponível, disponibilidade online, filmes e séries ilimitados e cancele quando quiser</li>                                             
                                </ul>
                                <hr>
                                
                                <h3>Intermediário</h3>
                                <p>Qualidade HD disponível</p>
                                <ul>
                                    <li>Valor R$ 22,99, com 2 tela disponíveis, disponibilidade online, filmes e séries ilimitados e cancele quando quiser</li>                                             
                                </ul>
                                <hr>
                                
                                <h3>Premium</h3>
                                <p>Qualidade Ultra HD disponível</p>
                                <ul>
                                    <li>Valor R$ 37,99, com 4 tela disponíveis, disponibilidade online, filmes e séries ilimitados e cancele quando quiser</li>                                             
                                </ul>

                                          
                                            </form>
                                </fieldset>
                                <p>
                                <button type="submit" class="btn btn-default">BÁSICO</button>
                                <button type="submit" class="btn btn-default">INTERMEDIÁRIO</button>
                                <button type="submit" class="btn btn-default">PREMIUM</button>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>        
                   </tr>
</div>
</body>

</html>