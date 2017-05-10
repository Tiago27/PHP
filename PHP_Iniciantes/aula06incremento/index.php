<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Operadores de incremento e decremento</title>
    </head>
    <body>
        <?php
        // put your code here
        $anoAtual = $_GET["aa"];
        echo "O ano atual é $anoAtual e o ano anterior é ".--$anoAtual;
        ?>
    </body>
</html>
