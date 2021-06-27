<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <title>Semana 03</title>
    <meta charset="utf-8">
  </head>
  <body>
    <?php

    #4. Crie um algoritmo no qual o usuário poderá escolher qual operação matemática ele 
    #poderá executar, adição, subtração, multiplicação e divisão. Como regra você deverá 
    #implementar funções que retornam os resultados das operações matemáticas. 
    
    function adicao($num1, $num2) {
        return $num1 + $num2;
    }

    function subtracao($num1, $num2) {
        return $num1 - $num2;
    }
    
    function multiplicacao($num1, $num2) {
        return $num1 * $num2;
    }    
    
    function divisao($num1, $num2) {
        return $num1 / $num2;
    }

    $calculoAdicao = adicao(6,3);
    $calculoSubtracao = subtracao(6,3);
    $calculoMultiplicacao = multiplicacao(6,3);
    $calculoDivisao = divisao(6,3);

    echo "6 + 3 = $calculoAdicao </br>";
    echo "6 - 3 = $calculoSubtracao </br>";
    echo "6 x 3 = $calculoMultiplicacao </br>";
    echo "6 / 3 = $calculoDivisao </br>";


    ?>
  </body>
</html>