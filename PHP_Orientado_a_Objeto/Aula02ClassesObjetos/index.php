<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Aula 02-POO</title>
    </head>
    <body>
        <?php
            require_once 'Caneta.php';#chama a classe caneta
            $c1 = new Caneta;# Instancia o objeto caneta
            $c1->cor = "Azul"; #atribui a o objeto c1(intancia de caneta) o valor Azul
            $c1->tampada = FALSE;#OBSERVAÇÃO para o php vazio é falso e 1(ou qualquer numero diferente de zero) é verdadeiro
            $c1->ponta = 0.5;
            $c1 ->destampar ();
            $c1->rabiscar();
            
            #var_dump e print_r mostram o statos do objeto(ou variavel)
            #var_dump($c1);
            print_r($c1);
            echo "<br/>";
            /*NOVO objeto caneta*/
            $c2 = new Caneta();
            $c2->cor = "Verde";
            $c2->carga = 50;
            $c2->tampar();
            print_r($c2);
        ?>
    </body>
</html>
