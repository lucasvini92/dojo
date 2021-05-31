<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <title>Semana 01</title>
    <meta charset="utf-8">
  </head>
  <body>
    <?php

    $numero = 25;
    $teste = $numero%2;

    if ($teste == 1)  {
        echo "O número $numero é impar";
    } else {
        echo "O número $numero é par";
    }

    ?>
  </body>
</html>