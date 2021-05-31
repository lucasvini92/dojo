<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <title>Semana 01</title>
    <meta charset="utf-8">
  </head>
  <body>
    <?php

    $nota1 = 4;
    $nota2 = 4;
    $nota3 = 8;

    $peso_nota1 = $nota1 * 0.2;
    $peso_nota2 = $nota2 * 0.3;
    $peso_nota3 = $nota3 * 0.5;

    $media = $peso_nota1 + $peso_nota2 + $peso_nota3;

    echo "O valor da média das notas é de $media";

    ?>
  </body>
</html>