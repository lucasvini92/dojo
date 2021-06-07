
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <title>Semana 02</title>
    <meta charset="utf-8">
  </head>
  <body>
    <?php

    $prod = 1;
    for ($i=1; $i <=15 ; $i+=2) { 
        $prod *= $i;
    }
    echo "O produto dos números impares de 1 a 15 = $prod";

    ?>
  </body>
</html>