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
            function teste(&$x){
                $x+=2;
                echo "O valor de X é $x<br/>";
            }
            $a = 3;
            teste($a);
            echo "O valor de A é $a<br/>";
        ?>
    </body>
</html>
