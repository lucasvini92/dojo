
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <title>Semana 02</title>
    <meta charset="utf-8">
  </head>
  <body>
    <?php

    for ($i=0; $i< 10; $i++){
        $vet[$i] = rand(1,100);
    } 
    print_r($vet);
    echo "</br>";
    
    foreach ($vet as &$vet2) {
        $vet2 = $vet2 * 2;
    }
    print_r($vet);

    ?>
  </body>
</html>