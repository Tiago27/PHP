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
            /*
            //Imprimir o vetor
            //ORDENANDO VALORES
            $n = array(0=>3, 1=>5, 2=>8, 3=>2);
            foreach($n as $valor){
                echo "$valor<br/>";
            }
            
            $n = array(0=>3, 1=>5, 2=>8, 3=>2);
            print_r($n);
            var_dump($n);
             
            $n = array(0=>3, 1=>5, 2=>8, 3=>2);
            //array_push($n, 7); insere elemento no final
            //array_pop($n); remove do final
            //array_unshift($n, 7); insere elemento no inicio
            //array_shift($n); remove elemento do inicio
            echo "Quantidade de vetores: ".count($n)."<br/>";
            print_r($n);
             
            $n = array(0=>3, 1=>5, 2=>8, 3=>2);
            sort($n);// ordena em ordem crescente
            rsort($n);// ordena em ordem decrescente
            //ordenação associativa
            asort($n);// ordena em ordem crescente e mantem os indices originais
            arsort($n);// ordena em ordem decrescente e mantem os indices originais
            print_r($n);
             */
             
            //Ordenado por chave(ORDENA OS INDÍCES)
            $n = array(3=>"C", 2=>"E", 0=>"H", 1=>"B");
             //ksort($n); ORDENA OS INDÍCES EM ORDEM CRESCENTE
             //kRsort($n); ORDENA OS INDÍCES EM ORDEM CRESCENTE
             print_r($n);
             
        ?>
        </pre>
    </body>
</html>
