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
        require_once 'Caneca.php';
        $mickey = new Caneca();
        $mickey->setCor("Vermelha");
        $mickey->setCaio(TRUE);
        $mickey->setCapacidade(500);
        //$mickey->cor="azul"; public visivel
        //$mickey->capacidade = 67; protected não visivel
        //$mickey->cheia = true; private não visivel
        var_dump($mickey);
        print_r("A caneca é da cor ".$mickey->cor." e tem a capacidade de ". $mickey->getCapacidade()."ml");
        //Maneira alternativa: print_r("A caneca é da cor ".$mickey->cor." e tem a capacidade de ". $mickey->getCapacidade()."ml");
        if ($mickey->getCaio() == TRUE) {
            echo "<br/>Caneca esta quebrada";
        } else {
            echo "<br/>Caneca não esta quebrada";
        }
        ?>
        </pre>
    </body>
</html>
