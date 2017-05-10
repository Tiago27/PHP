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
        require_once 'Caneta.php';
        $c1 = new Caneta("BIC",0.5,"Vermelha");
        //print "Eu tenho uma caneta do medelo {$c1->getModelo()} e ponta {$c1->getPonta()}";
        var_dump($c1);
        //print_r($c1);
        ?>
        </pre>
    </body>
</html>
