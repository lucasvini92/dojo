
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <title>Semana 01</title>
    <meta charset="utf-8">
  </head>
  <body>
    <?php

    $lado1 = 10;
    $lado2 = 8;
    $lado3 = 10;

    if ($lado1 >= ($lado2 + $lado3)) {
        echo "Valores inválidos";
        die();
    } 
    if ($lado2 >= ($lado1 + $lado3)) {
        echo "Valores inválidos";
        die();
    } 
    if ($lado3 >= ($lado1 + $lado2)) {
        echo "Valores inválidos";
        die();
    }  

    if ($lado1 == $lado2 && $lado1 == $lado3) {
        echo "É um triangulo equilátero";
    }
    elseif (($lado1 == $lado2 && $lado1 != $lado3) || ($lado1 == $lado3 && $lado1 != $lado2) || ($lado2 == $lado3 && $lado2 != $lado1)) {
        echo "É um triangulo isósceles";
    }
    else {
        echo "É um triangulo escaleno";
    } 


    ?>
  </body>
</html>