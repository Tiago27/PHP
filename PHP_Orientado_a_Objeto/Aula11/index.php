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
            require_once 'Aluno.php';
            require_once 'Visitante.php';
            require_once 'Bolsista.php';
            require_once 'Professor.php';
            require_once 'Tecnico.php';
            
            /*$v = new Visitante(); 
            $v->setNome("Juvenal");
            $v->setIdade(33);
            $v->setSexo("M");
            print_r($v);
            
            $al = new Aluno();
            $al->setNome("Pedro");
            $al->setMatricula(1111);
            $al->setIdade(16);
            $al->setSexo("M");
            $al->setCurso("Informatica");
            $al->PagarMensalidade();
            print_r($al);
            
            $b = new Bolsista();
            $b->setMatricula(11222);
            $b->setNome("Jubileu");
            $b->setBolsa(23.4);
            $b->setSexo("M");
            $b->setCurso("Administração");
            $b->setIdade(17);
            $b->PagarMensalidade();
            print_r($b);*/
            
            $p = new Professor();
            $p->setNome("Bond, James Bond");
            $p->receberAumento();
            $p->setSexo("M");
            $p->setIdade(58);
            $p->setEspecialidade("Matemática");
            $p->setSalario(489);
            print_r($p);
            
            $t = new Tecnico();
             $t->setNome("Diana");
            $t->Praticar();
            $t->setSexo("F");
            $t->setIdade(23);
            $t->setRegistroProfissional(4124244);
            $t->setMatricula(1234);
            $t->setCurso("Gastronomia");
            print_r($t);
            
        ?>
        </pre>
    </body>
</html>
