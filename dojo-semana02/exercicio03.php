
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <title>Semana 02</title>
    <meta charset="utf-8">
  </head>
  <body>
    <?php

    $num = 19;
        
    for ($i=1; $i <= $num ; $i++) { 
      if ($num % $i ==0){
        $cont++;
      }
    }
    if ($cont == 2) {
      echo "O número $num é primo";
    } else {
      echo "O número $num não é primo";
    }

    ?>
  </body>
</html>