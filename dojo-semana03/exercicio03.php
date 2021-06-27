<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <title>Semana 03</title>
    <meta charset="utf-8">
  </head>
  <body>
    <?php

    #3. Fazer uma função que receba um caractere como parâmetro e retorne 1 caso o caractere seja uma
    #consoante, ou 0 caso contrário.    

    function caractere($letra) {
        $vogais = ['a','e','i','o','u'];
        for ($i=0; $i <= count($vogais) ; $i++) { 
            if ($letra == $vogais[$i]) {
                return 0;
            }
        }
        return 1;
    }

    $letra = caractere('b');
    echo "$letra";
    

    ?>
  </body>
</html>