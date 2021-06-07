
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <title>Semana 02</title>
    <meta charset="utf-8">
  </head>
  <body>
    <?php

    $num = 5;
    $fat = 1;

    for ($i=1; $i<= $num ; $i++) { 
        $fat *=  $i;
    }
    echo "$num! = $fat";

    ?>
  </body>
</html>