<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <title>Semana 01</title>
    <meta charset="utf-8">
  </head>
  <body>
    <?php

    $pow_lamp = 20;
    $largura_comodo = 5;
    $comprimento_comodo = 10;
    $area_comodo = $largura_comodo * $comprimento_comodo;
    $qnt_watts = 18*$area_comodo;
    $qnt_lamp = ceil($qnt_watts/$pow_lamp);

    echo "São necessárias $qnt_lamp lampadas de $pow_lamp 
    watts para iluminar um cômodo de $area_comodo m²";

    ?>
  </body>
</html>