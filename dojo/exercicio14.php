<<<<<<< HEAD
=======

>>>>>>> 01c5dbcf9760e75d6b5feece8db94e5e9ce1e6c9
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <title>Semana 01</title>
    <meta charset="utf-8">
  </head>
  <body>
    <?php

<<<<<<< HEAD
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

=======
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
>>>>>>> 01c5dbcf9760e75d6b5feece8db94e5e9ce1e6c9


    ?>
  </body>
<<<<<<< HEAD
</html>
=======
</html>
>>>>>>> 01c5dbcf9760e75d6b5feece8db94e5e9ce1e6c9
