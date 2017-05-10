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
           require_once 'Pessoa.php';
           require_once 'Aluno.php';
           require_once 'Professor.php';
           require_once 'Funcionario.php';
           
           $p1 = new Pessoa();
           $p2 = new Aluno();
           $p3 = new Professor();
           $p4 = new Funcionario();
           
           $p1->setNome("Pedro");
           $p2->setNome("Maria");
           $p3->setNome("Cláudio");
           $p4->setNome("Fabiana");
           
           $p2->setCurso("Informática");
           $p3->setSalario("2500.75");
           $p3->receberAum(3);
           $p4->setSetor("Estoque");
           
           $p3->receberAum(550.20);
           $p4->MudarTrabalho();
           $p2->cancelarMatricula();
           
           var_dump($p1);
           var_dump($p2);
           var_dump($p3);
           var_dump($p4);
        ?>
    </body>
</html>
