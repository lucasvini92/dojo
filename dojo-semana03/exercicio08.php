<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <title>Semana 03</title>
    <meta charset="utf-8">
  </head>
  <body>
    <?php

    #a altura (alt) e o sexo de uma pessoa e retorna o seu peso ideal. 
    #Para homens, calcular o peso ideal usando a fórmula peso ideal = 72.7 x alt - 58 e, 
    #para mulheres, peso ideal = 62.1 x alt - 44.7.

    function pesoIdeal($sexo,$alt) {
        if ($sexo == 'm') {
            $pesoIdeal = (72.7 * $alt) - 58;
        }
        else if ($sexo == 'f') {
            $pesoIdeal = (62.1 * $alt) - 44.7;
        }
        else {
            $pesoIdeal = 'Informe "m" para masculino e  "f" para feminino';
        }
        return $pesoIdeal;
    }

    $peso = pesoIdeal('m',1.80);
    echo "O seu peso ideal é de $peso kg";

    ?>
  </body>
</html>