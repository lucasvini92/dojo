<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <title>Semana 01</title>
    <meta charset="utf-8">
  </head>
  <body>
    <?php

    $valor_produto = 902.50;
    $calc_dif_entrada = intval($valor_produto/3);
    $entrada = number_format(($valor_produto - 2*$calc_dif_entrada),2);
    $parcela = number_format(($valor_produto - $entrada)/2 , 2);
    
    echo "Sendo o valor do produto = R$ $valor_produto </br>
    O valor da entrada seria de R$ $entrada </br>
    E o valor de cada parcela seria de R$ $parcela"   

    ?>
  </body>
</html>