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
            //array 
            $n = array(3,5,8,2);
            $n[]=1;
            print_r($n);
             
            //range
            //range(valor do primeiro vetor, valor do segundo vetor, passo);
            $c = range(5,20,2);
            foreach ($c as $valor){
                echo "$valor ";
            }
            
            //Vetores personalizados
            $v = array(1=>"A", 3=>"B",6=>"C",8=>"D"); 
            $v[]="E";
            unset($v[8]);//desaloca um vetor
            print_r($v);
             
            //Chaves Assosiativas
            $cad = array("nome"=>"Ana","idade"=>23,"peso"=>78.5);
            $cad["fuma"]=TRUE;
            print_r($cad);
             
            $cad = array("nome"=>"Ana","idade"=>23,"peso"=>78.5);
            $cad["fuma"]=TRUE;
            foreach ($cad as $campo => $valor){
                echo "O valor de $campo é $valor<br/>";
            }
            */
            $n = array(array(2,3),array(3,4),array(9,5));
            $n[2][0]= $n[1][1];
            print_r($n);
        ?>
        </pre>
    </body>
</html>
