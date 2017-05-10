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
            
            require_once 'Cachorro.php';
            $c = new Cachorro();
            $c->reagirFrase("Olá");
            $c->reagirFrase("vai apanhar");
            $c->reagirHora(11,45);
            $c->reagirHora(21,00);
            $c->reagirDono(false);
            $c->reagirIdadePeso(2, 12.5);
            $c->reagirIdadePeso(17, 4.5);
        ?>
    </body>
</html>
