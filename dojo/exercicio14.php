<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <title>Semana 01</title>
    <meta charset="utf-8">
  </head>
  <body>
    <?php

    $lado1 = 8;
    $lado2 = 1;
    $lado3 = 1;
    
    if($lado1 > ($lado2+$lado3)){
        echo "Valores inválidos";
    } if ($lado2 > ($lado1+$lado3)){
        echo "Valores inválidos";
    } if ($lado3 > ($lado1+$lado2)){
        echo "Valores inválidos";
    } else {
        echo "Passou";
    }



    ?>
  </body>
</html>
