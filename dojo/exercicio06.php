<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <title>Semana 01</title>
    <meta charset="utf-8">
  </head>
  <body>
    <?php

    $valor_de_fabrica = 28000;
    $porcentagem_lucro = 25;
    $porcentagem_impostos = 8;
    $valor_lucro = number_format ($valor_de_fabrica * ($porcentagem_lucro/100), 2, ",","." );
    $valor_imposto = number_format ($valor_de_fabrica * $porcentagem_impostos/100,2, ",","." );
    $valor_final = number_format ($valor_de_fabrica + $valor_imposto + $valor_lucro, 2, ",","." );

    echo "O valor correspondente ao lucro do distribuidor é de R$ $valor_lucro </br>
    O valor correspondete aos impostos é de R$ $valor_imposto </br>
    E o valor final do veiculo é de R$ $valor_final"

    ?>
  </body>
</html>