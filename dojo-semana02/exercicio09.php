
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <title>Semana 02</title>
    <meta charset="utf-8">
  </head>
  <body>
    <?php

    $array = [];

    for ($i=1; $i <=10 ; $i++) { 
      $array[] = $_POST["valor$i"];
    }  
    echo "O valor da matriz principal é: </br>";
    var_dump($array);
    echo "</br> O maior valor informando pelo usuário foi :" . max($array);
    echo "</br> e o menor valor informado pelo usuário foi: " . min($array);

    ?>


  </body>
</html>