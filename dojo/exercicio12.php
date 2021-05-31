<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <title>Semana 01</title>
    <meta charset="utf-8">
  </head>
  <body>
    <?php

    $numero_conta  = 123456;
    $saldo_inicial = 5000;
    $total_despesa = 550;
    $total_creditos = 800;
    $limite_credito = 7000;
    $novo_saldo = $saldo_inicial + $total_despesa - $total_creditos;
    echo "O novo saldo do cliente é de R$: $novo_saldo </br>";

    if ($novo_saldo > $limite_credito) {
        echo "Limite de crédito excedido";
    }

    
    ?>
  </body>
</html>