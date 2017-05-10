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
        <pre>
        <?php
        // put your code here
          require_once 'Caneta.php';#chama a classe caneta
            $c1 = new Caneta;# Instancia o objeto caneta
            $c1 -> modelo ="BIC cristal";
            $c1->cor = "Azul";
            //$c1->ponta= 0.5;
            //$c1->carga="99";
            //$c1->tampada= TRUE;
            $c1->rabiscar();
            $c1->destampar();
            $c1->TamanhoPonta(3);
             print_r($c1); 
        ?>
        </pre>
    </body>
</html>
