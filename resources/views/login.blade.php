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
                height: 50vh;
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
                    
                                         
                        

                        
                            <a href="/cadastro1">Cadastrar</a>
                        
                    
                </div>
         

            <div class="content">
                <div class="title m-b-md">
                    EnterPlay[>
                </div>
        
        <!-- CONTEUDO -->
        <div id='conteudo_principal'>

                <br>
                <br>

    <body>

        <div id="login">
                <h1>Login</h1>
    
                   
                        
                <form action="{{url('logar')}}" method="post">
                    
                        @csrf
    <p>
                      <div class="form-group">
                        <label for="campo-email"></label>
                        <input type="email" class="form-control" name="email" id="campo-email" placeholder="Email" required="">
                      </div>
                    
                      <div class="form-group">
                        <label for="campo-senha"></label>
                        
                        <input type="password" class="form-control" name="password" id="campo-senha" placeholder="Senha" required="">
                      </div>
                      <p>
                      <button type="submit" class="btn btn-default">Entrar</button>				
                </form>
        </div>
    </body>
</body>
    </html>