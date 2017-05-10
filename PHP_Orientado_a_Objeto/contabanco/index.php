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
        // put your code here
        require_once 'ClasseBanco.php';
        $p1 = new ClasseBanco();
        
        $p1->abrirConta("cc");
        $p1->setDono("Jubileu");
        $p1->setNumConta(1111);
        $p1->depositar(300);
        $p1->pagarMensal();
        $p1->sacar(338);
        $p1->fecharConta();
        print_r($p1);
        
        $p2 = new ClasseBanco();
        $p2->abrirConta("cp");
        $p2->setDono("Creuza");
        $p2->setNumConta(2222);
        $p2->depositar(500);
        $p2->sacar(1000);
        $p2->pagarMensal();
        $p2->sacar(630);
        $p2->fecharConta();
        print_r($p2);
        
        ?>
        </pre>
    </body>
</html>
