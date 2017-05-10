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
                background-color: lime;
                padding: 10px 0px 10px 90px;;
                margin-bottom: 10px;
            }
            .caixa{
                margin: 50px 0px 0px 400px;
                font-family: legenda2;
                font-size: 26px;
                width: 500px;
                height: 500px;
                background-color: #ddd;
                box-sizing: border-box;
                overflow: auto;
				box-shadow: 15px 15px 0px #0C9;
                }
            .botao{
                font-family: legenda3;
                font-size: 20px;
                margin: 30px 0px 0px 136px;
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
            }
            select{
                margin: 50px 0px 0px 0px;
                font-family: nova;
                font-size: 20px;
                color: #FFF;
                width: 60px;
                height: 30px;
                background-color: #000;
            }
            form{
               padding-left: 40px;  
            }
        </style>
    </head>

    <body>
        <div class="caixa">
            <legend>Calculo Tabuada</legend>
            <form method="get" action="calculo.php">
               <?php
                   echo "Escolha um número: ";
                ?>
                <select type="text" name="num">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                    <option>6</option>
                    <option>7</option>
                    <option>8</option>
                    <option>9</option>
                    <option>10</option>
                </select>
            <input type="submit" value="Tabuada" class="botao"/>
            </form>    
            
                
    </div> 
    </body>
</html>
