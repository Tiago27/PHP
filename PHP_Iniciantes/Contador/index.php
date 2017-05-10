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
            }
            .d2{
                margin-left: 40px;
            }
            .d1{
                font-family: legenda;
                font-size: 20px;
                height: 29px;
                width: 60px;
            }
            
            .botao{
                font-family: legenda3;
                font-size: 20px;
                margin-left: 40px;
                width: 154px;
                height: 50px;
                border: none;
                background-color: blueviolet;
            }
        </style>
    </head>
    <body>
        <div class="caixa">
        <form method="get" action="Contador.php">
            <legend>Contador</legend>
            <div class="d2">  
                <?php
                   echo"De: <input class='d1' type='number' max='1000' min='0' name='v1' value='0' /><br/>";
                   echo"Até: <input class='d1' type='number' min='0' max='1000' name='v2' value='0' /><br/>";
                ?>
            </div>
            <input type="submit" value="Enviar" class="botao" />
        </form>
        </div>    
        
    </body>
</html>
