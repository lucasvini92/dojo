<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <title>Semana 01</title>
    <meta charset="utf-8">
  </head>
  <body>
    <?php

    $funcionario = 'Lucas';
    $horas_trabalhadas = 40;
    $qnt_dependetes = 1;
    $salario = number_format(($horas_trabalhadas * 12) + ($qnt_dependetes * 40),2);
    $inss = number_format($salario * 8.5/100,2);
    $ir = number_format ($salario * 5/100,2);
    $salario_liquido = number_format($salario - $inss - $ir,2);

    echo "O funcionário $funcionario trabalhando $horas_trabalhadas horas e com $qnt_dependetes dependete(s)
    terá um salário bruto de R$ $salario; </br>
    O seu desconto de INSS será de R$ $inss; </br>
    O seu desconto de Imposto de Renda será de R$ $ir; </br>
    E o salário liquido final é de R$ $salario_liquido; "

    ?>
  </body>
</html>