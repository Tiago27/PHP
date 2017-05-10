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
    </head>
    <body>
        <?php
        // put your code here
        $a = 3;
        $b = "3";
        $resultado = ($a == $b)?"Sim":"Não";
        echo "As variaveis A e B são iguais: $resultado";
        $resultado = ($a === $b)?"Sim":"Não";
        echo "<br/>As variavei A e B são iguai e do mesmo tipo: $resultado";
        ?>
    </body>
</html>
