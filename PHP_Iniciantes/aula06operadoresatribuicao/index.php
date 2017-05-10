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
            h1{
                font: 12pt aril;
                color: #ff3366;
            }
        </style>
    </head>
    <body>
        <?php
        // put your code here
        /*
         $numero1 = 1;
         $numero2 = 2;
         $numero3 =  $numero1 + $numero2;     
         $numero3 += 2;// numero recebe numero + 2;
         $numero3 *= 2;
         $numero3 /= 2;
         $numero3 -= 2;
         $numero3 %= 2;
         $numero3 .= 2;//contatena duas strngs
         $numero4++;
         $numero4--;
        */
        $valor = $_GET["x"];
        $valor2 = $_GET["y"];
        echo "<h1>O preço do produto 1: R$ ".number_format($valor, 2,",",".")."</h1>";
        echo "O valor do desconto é R$ ". number_format(($valor*0.1), 2,",",".");
        $valor -= ($valor*0.1);
        echo "<br/>O valor com 10% de desconto é R$ ". number_format($valor, 2,",",".");
        
        echo "<h1>O preço do produto 2 R$: ".number_format($valor2, 2,",",".")."</h1>";
        echo "O valor do juros é R$ ". number_format(($valor2*0.1), 2,",",".");
        $valor2 +=($valor2*0.1);
        echo "<br/>O valor com 10% de juros é R$ ". number_format($valor2, 2,",",".");
        ?>
         
    </body>
</html>
