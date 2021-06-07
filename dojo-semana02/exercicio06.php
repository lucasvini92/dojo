
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <title>Semana 02</title>
    <meta charset="utf-8">
  </head>
  <body>
    <?php

    for ($i=0; $i < 5 ; $i++) { 
        $num = rand(1,100);
        $soma += $num;
        echo "$num + ";
    }
    echo "= $soma";    

    ?>
  </body>
</html>