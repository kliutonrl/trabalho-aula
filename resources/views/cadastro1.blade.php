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
                    
                                         
                        

                        
                            <a href="/login">Login</a>
                        
                    
                </div>
         

            <div class="content">
                <div class="title m-b-md">
                    EnterPlay[>
                </div>
                <!-- CONTEUDO -->
        <div id='conteudo_principal'>
            
                
                    
            <div id="cadastro">
                <h1>Cadastrar</h1>
    
                                                           
                <form action="{{url('cadastrar')}}" enctype="multipart/form-data" method="post">
                    
                        @csrf
    <p>
                      <div class="form-group">
                        <label for="campo-nome"></label>
                        <input type="text" class="form-control" name="nome" id="campo-nome" placeholder="Nome" required="">
                      </div>
<p>
		<div class="form-group">
                        <label for="campo-cpf"></label>
                        <input type="number" class="form-control" name="cpf" id="campo-cpf" placeholder="CPF" required="">
                      </div>
<p>
		<div class="form-group">
                        <label for="campo-email"></label>
                        <input type="email" class="form-control" name="email" id="campo-email" placeholder="Email" required="">
                      </div>
<p>
        <div class="form-group">
                <label for="campo-senha"></label>
                <input type="password" class="form-control" name="senha" id="campo-senha" placeholder="Senha" required="">
              </div>

<p>
		<div class="form-group">
                        <label for="campo-telefone"></label>
                        <input type="tel" class="form-control" name="telefone" id="campo-telefone" placeholder="Telefone" required="">
                      </div>
<p>	 	
		<div class="form-group">
                        <label for="campo-endereco"></label>
                        <input type="text" class="form-control" name="endereco" id="campo-endereco" placeholder="Endereco" required="">
                      </div>
<p>
		<div class="form-group">
                        <label for="campo-cep"></label>
                        <input type="number" class="form-control" name="cep" id="campo-ncep" placeholder="CEP" required="">
                      </div>
<p>                    
                      <div class="form-group">
                        <label for="campo-bairro"></label>
                        
                        <input type="text" class="form-control" name="bairro" id="campo-bairro" placeholder="Bairro" required="">
                      </div>
<p>
		<div class="form-group">
                        <label for="campo-numero"></label>
                        <input type="number" class="form-control" name="numero" id="campo-numero" placeholder="Número" required="">
                      </div>
<p>
		<div class="form-group">
                        <label for="campo-cidade"></label>
                        <input type="text" class="form-control" name="cidade" id="campo-cidade" placeholder="Cidade" required="">
                      </div>
<p>
		<div class="form-group">
                        <label for="campo-estado"></label>
                        <input type="text" class="form-control" name="estado" id="campo-estado" placeholder="Estado" required="">
                      </div>
 <p>                                               
                      <button type="submit" class="btn btn-default">Próxima etapa</button>
                                            </form>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        
            
            </td>
        </tr>
    
</div>
</body>

</html>