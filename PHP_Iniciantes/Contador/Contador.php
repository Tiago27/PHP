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
                font-family: legenda;
                src: url(Pixeled.ttf);
            }
            
            @font-face{
                font-family: legenda2;
                src: url(PostinoStd.otf);
            } @font-face{
                font-family: legenda3;
                src: url(ka1.ttf);
            }
            
            legend{
                
                font-family: legenda;
                font-size: 50px;
                background-color: aquamarine;
                padding-left: 50px;
                margin-bottom: 30px;
            }
            .caixa{
                margin: 50px 0px 0px 400px;
                font-family: legenda2;
                font-size: 29px;
                width: 500px;
                height: 500px;
                background-color: #ddd;
                box-sizing: border-box;
                overflow: auto;
                columns:40px  4;
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
        </style>
    </head>
    <body>
        <div class="caixa">
            <form action="index.php">
                <input type="submit" value="Voltar" class="botao" /><br/>     
                <?php
                    $parametro1 = $_GET["v1"];
                    $parametro2 = $_GET["v2"];

                    if ($parametro1 > $parametro2) {
                        while ($parametro1 >= $parametro2){
                            echo  $parametro1."<br/>";
                            $parametro1-=1;
                        } 
                    }elseif($parametro2 > $parametro1){
                         while ($parametro2 >= $parametro1){
                            echo  $parametro1."<br/>";
                            $parametro1+=1;
                        } 
                    }
                ?>      
            </form> 
        </div>    
    </body>
</html>
