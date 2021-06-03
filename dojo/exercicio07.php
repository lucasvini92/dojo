<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <title>Semana 01</title>
    <meta charset="utf-8">
  </head>
  <body>
    <?php

    $nota1 = 7;
    $nota2 = 6;
    $nota3 = 4;

    $peso_nota1 = $nota1 * (1/9);
    $peso_nota2 = $nota2 * (3/9);
    $peso_nota3 = $nota3 * (5/9);

    $media = $peso_nota1 + $peso_nota2 + $peso_nota3;

    echo "O valor da média das notas é de $media";

    ?>
  </body>
</html>