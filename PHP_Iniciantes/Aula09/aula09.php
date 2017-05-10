<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="utf-8" />
<title>If Estrutura Concidional</title>
</head>

<body>
	<?php
		$a = isset($_GET["ano"])?$_GET["ano"]:1990;
		$idade = date("Y") - $a;
		echo "Você nasceu em $a é tem $idade anos<br/>";
		if($idade >= 18 && $idade <= 70){
			$tipoVoto ="Voto obrigatorio!";
		}else{
			if($idade >= 16 || $idade >=71){
				$tipoVoto ="Voto Opcional!";
			}else{
				$tipoVoto ="Não vota!";
			}
		}
		
		echo "Situação: ".$tipoVoto;	
	?>
</body>
</html> 