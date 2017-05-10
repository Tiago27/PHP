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
            /*
            //14-strtolower deixa todas as letras em caixa baixa
            $nome = "Gustavo Guanabara";
            echo "Seu nome e ". strtolower($nome);
            
            //15-stroupper deixa tadas as letras em caixa alta
            $nome = "Gustavo Guanabara";
            echo "Seu nome e ". strtoupper($nome);
             
            //16-ucfirst primeira letra da string em caixa alta
            $nome = "gustavo guanabara";
            echo "Seu nome e ". ucfirst($nome);
            
            //17-ucwords primeira letra de cada string em maiusculo
            $nome = "gustavo guanabara";
            echo "Seu nome e ". ucwords($nome);
             
            //18-strrev imprime a string ao contrario
            $nome = "gustavo guanabara";
            print(strrev($nome));
             
            //19-strpos mostra o indice da posição da string 
            //strpos($frase,"PHP"); nesse caso mostra a posição da string PHP
            $frase = "Estou aprendendo PHP";
            $pos = strpos($frase,"PHP");
            echo "$frase <br/>";
            echo "A string foi encontrada na posição $pos";
            
            //20-stripos mostra o indice da posição da string 
            //stripos($frase,"php");busca pelo parametro em menusculo e mostra a posição da string php em paiusculo ou em menusculo
            $frase = "Estou aprendendo PHP";
            $pos = stripos($frase,"php");
            echo "$frase <br/>";
            echo "A string foi encontrada na posição $pos";
             
            21-substr_ocunt conta a quantidade de vezes que uma palavra e repetida dentro de uma string
            $frase = "Estou aprendendo PHP no curso em video de PHP";
            $count = substr_count($frase, "PHP");
            print("PHP encontrado $count vezes");
             
            //22-substr mostra uma pedaço da string que apartir uma posição e possui um tamanho
            //substr($site, posição, tamanho); ou apenas a posição
            //substr($site, posição);
            $site = "Curso em Vídeo";
            $sub = substr($site, 0, 5);
            echo $sub;
             
            //23-str_pad faz com que uma string caiba em um determinado espaço
            str_pad(variavel, tamanho da nova variavel, valor para completar a string, lado a ser completado);
            $nome = "Guanabara";
            $novo = str_pad($nome, 30, "#", STR_PAD_RIGHT);
            echo "Meu professor ". $novo." é lindo!";
            $novo1 = str_pad($nome, 30, "#", STR_PAD_BOTH);
            echo "<br/>Meu professor ". $novo1." é lindo!";
            $novo2 = str_pad($nome, 30, "#", STR_PAD_LEFT);
            echo "<br/>Meu professor ". $novo2." é lindo!";
             
            //str_repeat repete uma string
            //str_repeat(string, quantidade de vezes);
            $txt = str_repeat("Php", 5);
            print("O texto gerado foi $txt<br/>");
            print(str_repeat("-",48));
            
            //str_replace
            //str_replace(frase a ser substituida ,frase substituta, variavel);
            $frase = "Gosto de estudar Matemática!!!";
            $novaFrase = str_replace("Matemática","PHP", $frase);
            print($novaFrase);$frase = "Gosto de estudar Matemática!!!";

            ou */
            $frase = "Gosto de estudar Matemática!!!";
            $novaFrase = str_ireplace("matemática","PHP", $frase);
            print($novaFrase);
            
            
        ?>  
    </body>
</html>
