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
        // put your code here
        $a = 3;
        $b = 4;
        $b =&$a;#'b' recebe 'a' e referencia 'b' a 'a'
        $b += 5;
        echo "A vaariavel a vale $a";
        echo "<br/>A vaariavel a vale $b";
        ?>
    </body>
</html>
