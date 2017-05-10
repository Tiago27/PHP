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
        $nota1 = $_GET["n1"];
        $nota2 = $_GET["n2"];
        $media = ($nota1+$nota2)/2;
        echo "A média entre $nota1 e $nota2 é ".$media;
        echo "<br/> O aluno está ".(($media >= 6)?"Aprovado":"Reprovado");
        ?>
    </body>
</html>
