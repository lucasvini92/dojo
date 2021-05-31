<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <title>Semana 01</title>
    <meta charset="utf-8">
  </head>
  <body>
    <?php

    $vendas = 10000;
    $comissao = $vendas *0.15;
    $salario = number_format ($comissao + 800,2);

    echo "Total de vendas no mês: R$ $vendas </br>
    Valor total da comissão: R$ $comissao </br>
    Salário total = R$: $salario"

    ?>
  </body>
</html>