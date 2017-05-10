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
          $i=5;
          $fatorial = 1;
          do{   
            $v = "num".$i;
            $$v = $i;
            $fatorial*= $i; 
                if($i > 1){
                    echo $$v." x " ;
                }else{
                    echo $$v." = ".$fatorial ;
                }
            $i--;
          }while($i >= 1);
        
        ?>
    </body>
</html>
