
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <title>Semana 01</title>
    <meta charset="utf-8">
  </head>
  <body>
    <?php

/*Numa determinada região, o imposto sobre propriedade é calculado a partir de duas informações:
Área total do terreno (m2)
Área construída do terreno (m2)
O imposto é cobrado da seguinte maneira:
- R$ 5,00 para cada metro quadrado construído
- R$ 3,80 para cada metro quadrado não construído
Faça um programa que leia a área total do terreno, a área construída do terreno, calcule e imprima o valor total a ser pago.*/

    $area_terreno = 1000;
    $area_construida = 700;
    $area_vazia = $area_terreno - $area_construida;
    $imposto_construida = $area_construida * 5;
    $imposto_nao_construida = $area_vazia * 3.8;
    $imposto_total = $imposto_construida + $imposto_nao_construida;

    $imposto_total = number_format($imposto_total,2,',','.');

    echo "O valor total de imposto a ser pago é de R$ $imposto_total"

    ?>
  </body>
</html>