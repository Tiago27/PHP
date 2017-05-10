<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
	<?php
			$txt = isset($_GET["t"])?$_GET["t"]:"Tamanho não informado";
			$tam = isset($_GET["tam"])?$_GET["tam"]: "12pt";
			$cor = isset($_GET["cor"])?$_GET["cor"]: "#bbb";
			
		?>
	<link rel="stylesheet" href="estilo.css"/>
        <meta charset="UTF-8">
        <title></title>
		<style>
		span.texto{
			font-size: <?php echo $tam;?>;
			color: <?php echo $cor;?>;
		}
		</style>
    </head>
    <body>
		<div id="con">
		<?php
		echo "<span class='texto'>$txt<span>";
		?>
		<a href="index.html">voltar</a>
		</div>
	</body>
</html>
