<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
	<link rel="stylesheet" href="estilo.css"/>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
      
        <?php
        // put your code here
        $valor = $_GET["v"];
        echo "Digitou o valor $valor<br/>";
        echo "A raiz quadrada de $valor é ".number_format((sqrt($valor)),2);
        ?>
		
		<a href="index.html">voltar</a>
    </body>
</html>
