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
        <form method="get" action="calculo.php">
            <select name="num">
                <?php
                    for($c = 1; $c <= 10; $c++){
                       echo " <option>$c</option>";
                    }
                ?>
            </select>
            <input type="submit" value="verificar"/>
        </form>
        
    </body>
</html>
