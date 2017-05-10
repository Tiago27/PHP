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
        <style>
            body{
                font-family: sans-serif;
                font-size: 30pt;
            }
            .j1{
                color: blue;
                font-weight: bolder;
            }
            .j2{
                color: red;
                font-weight: bolder;
            }
        </style>
    </head>
    <body>
        <?php
            $cont = 0;
            $i = 0;
            $n = isset($_GET["num"])?$_GET["num"]:1;
            echo "Analizando o número $n<br/>";
            echo "Valores multiplos: ";
            for($i=1;$i<= $n; $i++){
                $r = $n%$i;
                if($r == 0 && $i!=$n){
                    echo $v = ($i == 1)?"":", ";
                    echo "$i";
                    $cont++;
                }elseif($i==$n){
                    $cont++;
                    $i2 = ($cont == 1)?$i:" e $i";
                    echo "$i2.<br/>";
                }
            }
                echo "Numero de multiplos: $cont<br/>";
                echo "$n é número primo? ".$v = ($cont <= 2 && $cont > 0)?
                                            "<span class='j1'>Sim</span>":
                                            "<span class='j2'>Não</span>";
        ?>
         <br/>
            <a href="javascript:history.go(-1)">volta</a>
    </body>
</html>
