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
        require_once 'Lutadores.php';
        require_once 'Lutar.php';
            $l = array();
            $l[0] = new Lutadores("Pretty Boy", "França", 31, 1.75, 68.9, 11, 2, 1);
            
            $l[1] = new Lutadores("Putscript", "Brasil", 29, 1.68, 57.8, 14, 2, 3);
            
            $l[2] = new Lutadores("SnapShadow", "EUA", 35, 1.65, 80.9, 12, 2, 1);
            
            $l[3] = new Lutadores("Dead Code", "Austrália", 28, 1.93, 81.6, 13, 0, 2);
            
            $l[4] = new Lutadores("UFOCobol", "Brasil", 30, 1.70, 119, 5, 4, 3);
            
            $l[5] = new Lutadores("Nerdaart", "EUA", 30, 1.81, 105.7, 12, 2, 4);
            
           $UEC01 = new Lutar();
           
           $r = 4;
           $r1 = 2;
           $UEC01->marcarLuta($l[$r], $l[$r1]);
           $UEC01->lutaComecar();
           $l[$r]->Status();
           $l[$r1]->Status();