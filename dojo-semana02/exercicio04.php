
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <title>Semana 02</title>
    <meta charset="utf-8">
  </head>
  <body>
    <?php

    $num1 = 1;
    $num2 = 1;
    echo "$num1 $num2 ";
    while ($a < 8) {
        $num3 = $num1 + $num2;
        $num1 = $num2;
        $num2 = $num3;
        $a++;
        echo "$num3 ";
    }    

    ?>
  </body>
</html>