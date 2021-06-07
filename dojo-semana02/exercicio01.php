
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <title>Semana 02</title>
    <meta charset="utf-8">
  </head>
  <body>
    <?php

    $idades = array(18,25,30,16,22);
    $soma =0;
    $velha = 0;
    $maior=0;
    
    for ($i=0; $i < 5; $i++) { 

      if($velha < $idades[$i]){
        $velha = $idades[$i];
      }

      $soma += $idades[$i];
      $media = $soma/5;

      if($idades[$i] > 20) {
        $maior++;
      }

    }

    echo "A idade da pessoa mais velha é $velha anos. </br>
    A média das idades é de $media anos. </br>
    A quantidade de pessoas com mais de 20 anos é de $maior.";
    
    
    ?>
  </body>
</html>