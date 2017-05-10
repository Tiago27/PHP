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
           // $s1 = 0;
           //$s2 = 6;
            $res=soma(1,3,4,5,4,3, 5, 1);
            echo "O resultado é ".$res;
            function soma() {
                $r=0;
                $n= func_get_args();//recebe os parametros como um vetor;
                //$tot= func_num_args(); recebe a quandidade de parametros passados;
                for($i=0;$i < func_num_args(); $i++){
                    $r +=$n[$i]; 
                }
                return $r;
            }
        ?>
    </body>
</html>
