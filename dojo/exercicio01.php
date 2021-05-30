<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <title>Semana 01</title>
    <meta charset="utf-8">
  </head>
  <body>
    <?php

    $dias = 20;
    $meses = 6;
    $anos = 28;
    $qnt_dias = ($anos * 365) + ($meses * 30) + $dias;
    echo "A quantidade de dias que uma pessoa de $anos anos, $meses meses e $dias dias viveu é de $qnt_dias dias";

    ?>
  </body>
</html>