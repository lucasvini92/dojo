<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <title>Semana 01</title>
    <meta charset="utf-8">
  </head>
  <body>
    <?php

    $salario = 2000;
    $tempo_trabalho = 7;
    $bonus = 0;

    if ($tempo_trabalho >= 5) {
        $bonus = $salario * 0.2;
    } else {
        $bonus = $salario * 0.1;
    }
    
    $novo_salario = $salario + $bonus;
    echo "Salário atual: R$ $salario </br> 
    Tempo de casa: $tempo_trabalho anos </br>
    Bonus recebido: R$ $bonus </br>
    E o valor do salário atualizado é de R$ $novo_salario";

    ?>
  </body>
</html>