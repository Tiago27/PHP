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
            require_once 'Pessoa.php';
            require_once 'Livro.php';
          $p[0] = new Pessoa("Pedro", 22, "M");
          $p[1] = new Pessoa("Maria", 17, "F");
          
          $l[0] = new Livro("PHP Básico", "José da Silva", 300, $p[0]);
          $l[1] = new Livro("POO com php", "Maria da Silva", 500, $p[0]);
          $l[2] = new Livro("PHP avançado", "Ana Paula", 800, $p[1]);
          
          $l[0]->abrir();
          $l[0]->folhear(30);
          $l[0]->voltarPag();
          $l[0]->detalhes();
          //print_r($l[0]);
        ?>
        </pre>
    </body>
</html>
