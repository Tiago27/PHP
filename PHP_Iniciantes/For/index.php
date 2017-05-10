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
        <form method="get" action="02-tabuada.php">
            <select name="num">
                <?php
                    for($c = 1; $c<=10; $c++){
                        echo "<option>$c</option><br/>";
                    }
                ?>
            </select>
            <input type="submit" value="Tabuada"/>
        </form>
        
    </body>
</html>
