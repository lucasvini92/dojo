<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <title>Semana 01</title>
    <meta charset="utf-8">
  </head>
  <body>
    <?php

    $item1 = 239.99;
    $item2 = 129.75;
    $item3 = 99.95;
    $item4 = 350.89;

    $qnt_vendida_item1 = 3;
    $qnt_vendida_item2 = 2;
    $qnt_vendida_item3 = 5;
    $qnt_vendida_item4 = 4;

    $valor_vendas = ($qnt_vendida_item1*$item1)+($qnt_vendida_item2*$item2)+($qnt_vendida_item3*$item3)+($qnt_vendida_item4*$item4);
    $comissao = $valor_vendas * 9/100;
    $salario = $comissao +200;

    $comissao = number_format($comissao,2);
    $salario = number_format($salario,2);

    echo "O vendedor vendeu: </br> 
    $qnt_vendida_item1 do item 1 </br>
    $qnt_vendida_item2 do item 2 </br>
    $qnt_vendida_item3 do item 3 </br>
    $qnt_vendida_item4 do item 4 </br>
    </br> O valor da sua comissão é de: R$ $comissao </br>
    Salário a receber: R$ $salario";
    
    ?>
  </body>
</html>
