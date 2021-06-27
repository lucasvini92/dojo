<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <title>Semana 03</title>
    <meta charset="utf-8">
  </head>
  <body>
    <?php

    #5. Construa uma função chamada to_lower_case que receba uma string. 
    #A função deverá retornar uma outra string cujo conteúdo seja o mesmo da string original, 
    #mas com todas as letras minúsculas. Considere que haverão apenas caracteres ASCII e 
    #não haverão letras com marcações especiais, como acentuação, trema, cedilha, etc. 
    #Note que os caracteres além das letras não devem sofrer alteração.

    function to_lower_case($frase){
        $fraseMaiusc = strtoupper($frase);
        return $fraseMaiusc;
    }

    echo "Teste retorno em caixa alta: </br>
    O texto digitado foi: </br>" . to_lower_case('lucas vinicio silva teofilo');

    ?>
  </body>
</html>