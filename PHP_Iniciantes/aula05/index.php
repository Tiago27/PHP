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
        $numero1 = $_GET["a"];//recebe valor da URL: http://localhost/phpiniciantes/aula05/index.php
        $numero2 = $_GET["b"];//recebe valor da URL: http://localhost/phpiniciantes/aula05/index.php
        $soma = $numero1 + $numero2;
        $media = ($numero1+$numero2)/2;
        echo "<h2>Valores recebidos: $numero1 e $numero2</h2>";
        echo "A soma do numero1 e numero2 é $soma";
        echo "<br/>A subtração de numero1 e numero2  é ". ($numero1 - $numero2);
        echo "<br/>A multiplicação de numero1 e numero2  é ". ($numero1 * $numero2);
        echo "<br/>A divisão de numero1 e numero2  é ". ($numero1 / $numero2);
        echo "<br/>O modulo de numero1 e numero2  é ". ($numero1 % $numero2);
        echo "<br/>A média é $media";
        ?>
    </body>
</html>
