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
                font: 12pt arial;
                color: #0000ff;
            }
        </style>
    </head>
    <body>
        <?php
        // put your code here
        $valor1 = $_GET["x"];
        $valor2 = $_GET["y"];
        echo "<h1>Valores recebidos: $valor1 e $valor2</h2>";
        echo "O valor absoluto de $valor2 é ". abs($valor2);//Valor absoluto(sem sinal) 
        echo "<br/>O valor de $valor1<sup>$valor2</sup> é ". pow($valor1, $valor2);//potènciação
        echo "<br/>A raiz de $valor1 é ". sqrt($valor1);//raiz quadrada
        echo "<br/>O valor de $valor1 arredondado é ". round($valor1);
        echo "<br/>O valor de $valor1 arredondado para cima é ". ceil($valor1);
        echo "<br/>O valor de $valor1 arredondado para baixo é ". floor($valor1);
        echo "<br/>A parte inteira de $valor1 é ". intval($valor1);
        echo "<br/>O valor em moeda de $valor1 é R$". number_format($valor1, 2,",",".");//formata o número
        ?>
    </body>
</html>
