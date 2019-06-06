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
                height: 400vh;
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
        
        <!-- CONTEUDO -->
        <div id='conteudo_principal'>
            
                   
                    
                        <td align = "center">                                       
                                <h2>Filmes Online!</h2>
                                <hr/>
                                <br>

                                <fieldset align="left">
                                        <legend>FILMES</legend>
                                        
                                                    <a href="{{url('https://thevid.tv/v/t06fys1ounbtij31mm3yk68hq')}}"> ASSISTIR</a>
                                            <p>
                                            <img class="imagem-fcapa" src="https://image.tmdb.org/t/p/w300/6XvIHDtzxr4Em9ZiAc7dg5tzTvW.jpg">
                                            <p>
                                            <h3>Johnny English 3.0</h3>
                                            <p>
                                            <p>Sinopse</p>
                                            <ul>
                                                <li>Em sua nova aventura, Johnny English (Rowan Atkinson) é a última salvação do serviço secreto quando um ataque cibernético revela as identidades de todos os agentes do país. Tirado de sua aposentadoria, ele volta à ativa com a missão de achar o hacker por trás do ataque. Com poucas habilidades e métodos analógicos, Johnny English precisa superar os desafios do mundo tecnológico para fazer da missão um sucesso.</li>                                             
                                            </ul>
                                            <hr>
                                            <p>
                                            <a href="{{url('storage\Filme\Aquaman.mp4')}}"> ASSISTIR</a>
                                            <p>
                                            <img class="imagem-fcapa" src="https://image.tmdb.org/t/p/w300/xRhseqaIwhLPk6VybqmbbvL2M1p.jpg">
                                            <p>
                                            <h3>Aquaman</h3>
                                            <p>Resumo</p>
                                            <ul>
                                                <li>Arthur Curry (Jason Momoa), mais conhecido como Aquaman, ainda é um homem solitário, mas quando ele começa uma jornada com Mera (Amber Heard), em busca de um algo muito importante para o futuro de Atlantis, ele aprende que não pode fazer tudo sozinho.</li>                                             
                                            </ul>
                                            <hr>
                                            <p>
                                            <a href="{{url('storage\Filme\Pixels.mp4')}}">ASSISTIR</a>
                                            <p>
                                            <img class="imagem-fcapa" src="https://image.tmdb.org/t/p/w300/5wUMddvusfF1hk1lgsuQzvPGPKf.jpg">
                                                <span class="fa fa-play"></span>
                                            <p>
                                            <h3>Pixels</h3>
                                            <p>Resumo</p>
                                            <ul>
                                                <li>A humanidade sempre buscou vida fora da Terra e, em busca de algum contato, enviou imagens e sons variados sobre a cultura terrestre nos mais diversos satélites já lançados no universo. Um dia, um deles foi encontrado. Disposta a conquistar o planeta, a raça alienígena resolveu criar monstros digitais inspirados em videogames clássicos dos anos 1980. Para combatê-los, a única alternativa é chamar especialistas nos jogos: Sam Brenner (Adam Sandler), Eddie Plant (Peter Dinklage), Ludlow Lamonsoff (Josh Gad) e a tenente-coronel Violet Van Patten (Michelle Monaghan).</li>                                             
                                            </ul>
                                        </div>
                                    </fieldset>
                                    <br> 

                                    <fieldset align="center">
                                            <legend>SUGESTÕES</legend>
                                            <br>
                                            <label for="sugestao">Deixe sua Sugestão:</label>
                                            <br>
                                            <textarea name="sugestao" id="sugestao" cols="50" rows=""> </textarea>

                                            <br/>
                                            <input type="submit" class="btn-submit" value="Confirmar!"/>                                     
                                                                                   
                                            </fieldset>                                
                            </form>
                        
                        </td>
                    </tr>
            
        </div>
    </body>
</body>

</body>
</html>