<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="utf-8" />
<title>If Estrutura Concidional</title>
</head>

<body>
	<?php
		$nota1 = isset($_GET["n1"])?$_GET["n1"]:0;
		$nota2 = isset($_GET["n2"])?$_GET["n2"]:0;
		
		$media = ($nota1+$nota2)/2;
		
		if($media > 7){
			$mensagem = "Parabéns você foi Aprovado!";
		}else{
			if($media >= 5 && $media <=7){
				$mensagem = "Você ficou de Exame!";
			}else{
				$mensagem = "Reprovado!";
			}
		}
		echo "Sua situação: $mensagem";
	?>
	<br/>
	<form method="get" action="http://localhost/phpiniciantes/Aula09iestruturacondicional/aula09.html">
		<input type="submit" value="Volta"/>
	</form> 
</body>
</html> 