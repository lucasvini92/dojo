
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <title>Semana 01</title>
    <meta charset="utf-8">
  </head>
  <body>
    <?php

/*16- Escreva um aplicativo PHP para testar se um número é maior que 30, 20 ou 10 usando o operador ternário.*/

    $teste30 = 30;
    $teste20 = 20;
    $teste10 = 10;

    $num = 25;

    $condicao = $num > $teste30 ? 'É maior que 30' : "É menor que 30"; 
    echo $condicao. "</br>";    
    $condicao = $num > $teste20 ? 'É maior que 20' : "É menor que 20"; 
    echo $condicao. "</br>";
    $condicao = $num > $teste10 ? 'É maior que 10' : "É menor que 10"; 
    echo $condicao. "</br>";
    
    ?>
  </body>
</html>