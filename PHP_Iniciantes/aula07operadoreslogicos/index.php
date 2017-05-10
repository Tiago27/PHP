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
        $idade = $_GET["i"];
        
        $situcao = (($idade > 18) && ($idade < 70))?"Voto Obrigatorio!":"Não Vota!";
      
        echo "Sua idade é $idade<br/>";
        echo "Situação: ".$situcao;
        ?>
    </body>
</html>
