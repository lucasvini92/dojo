
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <title>Semana 01</title>
    <meta charset="utf-8">
  </head>
  <body>
    <?php

/*Troque 2 números utilizando uma terceira variável.*/

    $var1 = 10;
    $var2 = 20;
    
    $var3 = $var1;
    $var1 = $var2;
    $var2 = $var3;

    echo "A variavel 1 que valia $var2 recebeu o valor de $var1 </br>
    E a váriavel 2 que valia $var1 recebeu o valor de $var2";

    ?>
  </body>
</html>