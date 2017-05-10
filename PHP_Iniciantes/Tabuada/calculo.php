<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
         <meta charset="UTF-8">
        <title></title>
        <style>
            @font-face{
                font-family: nova; 
                src: url(GOUDYSTO.TTF);
            }
            
            @font-face{
                font-family: legenda2;
                src: url(PostinoStd.otf);
            } @font-face{
                font-family: legenda3;
                src: url(ka1.ttf);
            }
            
            legend{
                font-family: legenda3;
                font-size: 50px;
                color: aliceblue;
				padding: 10px 0px 10px 0px;
                background-color: lime;
                padding-left: 90px;
                margin-bottom: 10px;
            }
            .caixa{
                margin: 50px 0px 0px 400px;
                font-family: nova;
                font-size: 27px;
                width: 500px;
                height: 500px;
                background-color: #ddd;
                box-sizing: border-box;
                overflow: auto;
                columns:40px  4;
				box-shadow: 15px 15px 0px #0C9;
            }
            
            .botao{
                font-family: legenda3;
                font-size: 20px;
                margin-left: 160px;
                width: 154px;
                height: 50px;
                border: none;
                background-color: blueviolet;
            }
            .conteudo{
                margin-left: 20px;
            }
            .result{
                color: crimson;
                font-size: 27px;
            }
        </style>
    </head>

    <body>
        <div class="caixa">
            <legend>Calculo Tabuada</legend>
            <div class="conteudo">
                    <form method="get" action="index.php">
                        <?php
                            $v =$_GET["num"]; 
                            $conta=0;
                            do{
                                echo ++$conta." x ".$v." = <span class='result'>".($conta*$v)."</span><br/>";
                            }while($conta < 10);
                        ?>    
                        <input type="submit" value="Voltar" class="botao"/>
                    </form>    
                
            </div>    
        </div> 
    </body>
</html>