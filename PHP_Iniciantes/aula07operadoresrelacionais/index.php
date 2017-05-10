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
        $numero1 = $_GET["n1"];
        $numero2 = $_GET["n2"];
        $tipo = $_GET["op"];
        echo "Os valores digitados foram $numero1 e $numero2<br/>";
        $resultado = ($tipo == "s")?"O resultado da soma é ":"O resultado da multiplicação é ";
        echo $resultado;
        $resultado = ($tipo == "s")? $numero1+$numero2:$numero1*$numero2 ;
        echo " ".$resultado;
        ?>
    </body>
</html>
