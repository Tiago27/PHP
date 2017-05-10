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
        <form method="get" action="02-part2.php">
            <?php
            $c=1;
            while ($c <= 5){
                echo "Valor $c:<input type='number' name='v$c' max='100' min='0' value='$c'/><br/>";
                $c++;
            }
        ?>
            <input type="submit" value="Enviar" class="botao"/>
        </form>
        
    </body>
</html>
