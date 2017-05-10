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
            require_once 'Animal.php';
            require_once 'Mamifero.php';
            require_once 'Reptil.php';
            require_once 'Peixe.php';
            require_once 'Ave.php';
            require_once 'Cobra.php';
            require_once 'Canguru.php';
            require_once 'Cachorro.php';
            require_once 'GoldFish.php';
            require_once 'Tartaruga.php';
            
            $Reptil = new Reptil();
            $Reptil->setPeso(43.9);
            $Reptil->setIdade(12);
            $Reptil->setNMembros(4);
            var_dump($Reptil);
            
            $cobra = new Cobra();
            $cobra->emitirSom();
            $cobra->setPeso(65);
            $cobra->setIdade(12);
            $cobra->setNMembros(0);
            $cobra->setCorEscama("Verde");
            $cobra->locomover();
            var_dump($cobra);
            
            $Tartatuga = new Tartaruga();
            $Tartatuga->locomover(); 
            $Tartatuga->alimentar();
            $Tartatuga->emitirSom();
            $Tartatuga->setCorEscama("Azul");
            $Tartatuga->setIdade(33);
            $Tartatuga->setNMembros(4);
            $Tartatuga->setIdade(78);
            var_dump($Tartatuga);   
        ?>
    </body>
</html>
