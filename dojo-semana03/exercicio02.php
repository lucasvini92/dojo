<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <title>Semana 03</title>
    <meta charset="utf-8">
  </head>
  <body>
    <?php

    #2. Faça uma função que recebe a idade de uma pessoa em anos, meses e dias e 
    #retorna essa idade expressa em dias.

    function diasVida($ano, $meses, $dias) {
        $total = ($ano * 365)+($meses*30) + $dias;
        return $total;
    }

    echo "A quantidade de dias que uma pessoa com essa idade é igual a ". diasVida(28,0,25);

    ?>
  </body>
</html>