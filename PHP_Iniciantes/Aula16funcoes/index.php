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
            //1-printf e echo; imprime
            $prec = 12.34;
            $proc = "leite";
            echo "O preço do $proc é R$". number_format($prec, 1)."<br/>";
            printf("O preço do %s é R$%.1f",$proc, $prec);
            
            //2-var_dump & export mostra o valor da s variaveis
            $v[0]=4;
            $v[1]=8;
            $v[2]=3;
            print_r($v);
            $v2 = array (3,4,5,6,7,7);
            print_r($v2);
            var_dump($v2);
            var_export($v2)
            
            //3-wordwrap quebra linhas
            $txt="Este é um exemplo de uma string gigante criado pelo php e vai mostrar o funcionamento da função wordwrep";
            $res = wordwrap($txt, 5,"<br/>\n", FALSE);
            echo $res;;
             
            
            //4-strlen o tamanho de uma string
            $txt ="Curso em Video";
            $tamanho = strlen($txt);
            echo $tamanho;
            
            //5-trim elimina o espaço do inicio e do final
            $nome = "   jose da Silva   ";
            echo strlen($nome);
            echo "<br/>";
            $nome = trim($nome);
            echo $nome;
            echo "<br/>";
            echo (strlen($nome));
            
            //6-ltrim elimina o espaço do começo
            $nome = "   jose da Silva   ";
            echo strlen($nome);
            echo "<br/>";
            $nome = ltrim($nome);
            echo(strlen($nome));
            
            //7-rtrim elimina o espaço do fim
            $nome = "   Jose da Silva   ";
            echo strlen($nome);
            echo "<br/>";
            $nome = rtrim($nome);
            echo ($nome);
            echo "<br/>";
            echo(strlen($nome));
            
            //8-str_word_count
            //0 conta a quantidade de palavras
            //1 cria um vetor
            //2 Cria uma vetor cujo o indice é a posição da palavra na string
            $frase = "Eu vou estudar php agora";
            $cont = str_word_count($frase, 2);
            print_r($cont);
           
            //9-explode cria um array para cada palavra
            //explode(delimitador, string)
            $site = "Curso em Video";
            $vetor = explode(" ", $site);//nesse caso o delimitador é um espaço em branco
            print_r($vetor);
            
            //10-str_split cria um vetor da string com indice da posição de cada letra
            $nome = "Maria";
            $vetor = str_split($nome);
            print_r($vetor);
            
            //11-implode ou join, junta os vetores e insere um caractere ou espaço entre eles
                $vetor[0]="Curso";
                $vetor[1]="em";
                $vetor[2]="Vídeo";
                
                $texto = implode("#", $vetor);
                print($texto);
            //12-chr mostra e letra correspondente a um codigo
                $letra = chr(67);
                echo "A letra que esta no codigo 67 é $letra";
            */
            //13-ord mostra o codigo correspondente a letra
                $letra = "C";
                $cod = ord($letra);
                echo "O codigo da letra C é $cod";
                
        ?>
    </body>
</html>
