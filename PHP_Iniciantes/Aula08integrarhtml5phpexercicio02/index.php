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
		<div id="con">
        <?php
        $nome = isset($_GET["nome"])?$_GET["nome"]:"não informado";
		$ano = isset($_GET["ano"])?$_GET["ano"]:0;
		$sexo = isset($_GET["sexo"])?$_GET["sexo"]:"[sem sexo]";
		$idade =($ano == 0)?"[não informado]": date("Y") - $ano;
		echo "$nome é $sexo e tem $idade anos.";
		
        ?>
		
		<a href="index.html">voltar</a>
		</div>
	</body>
</html>
