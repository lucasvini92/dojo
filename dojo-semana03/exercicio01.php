<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <title>Semana 03</title>
    <meta charset="utf-8">
  </head>
  <body>
    <?php

    #1. Faça uma função que recebe, por parâmetro, um valor inteiro e positivo e retorna o 
    # número de divisores desse valor

    function divisores($num) {
        $cont = 0;
        for ($i=1; $i <= $num ; $i++) { 
            if ($num % $i == 0){
                $cont ++;
            }
        }
        return $cont;
    }

    $div = divisores(10);
    echo "A quantidade de divisores do número informado é igual a $div";

    ?>
  </body>
</html>