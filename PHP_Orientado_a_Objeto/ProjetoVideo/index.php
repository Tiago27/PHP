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
         require_once 'video.php';
         require_once 'Gafanhoto.php';
         require_once 'Visualizacao.php';
            $v[0] = new Video("Aula de POO");
            $v[1] = new Video("Aula de PHP");
            $v[2] = new Video("Aula de HTML5");
            
            print_r($v);
            
            $g[0] = new Gafanhoto("Jubileu", 22, "M", "juba");
            $g[1] = new Gafanhoto("Creusa", 12, "F", "creuzita");
            
            $vis[0] = new Visualizacao($g[0], $v[2]); 
            $vis[1] = new Visualizacao($g[0], $v[1]);
            $vis[2] = new Visualizacao($g[1], $v[2]);
            $vis[0]->avaliarNota(5);
            $vis[1]->avaliarNota(5);
            print_r($vis);
                    
        ?>
        </pre>        
    </body>
</html>
