<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <title>Semana 03</title>
    <meta charset="utf-8">
  </head>
  <body>
    <?php

    #6. Faça uma função que recebe, por parâmetro, uma matriz A(6,6) e 
    #retorna o menor elemento da sua diagonal principal. 
    
    function matriz($pos) {
        $mat = [];
        $matPrincipal = [];
        for ($i=0; $i <$pos ; $i++) { 
          for ($j=0; $j <$pos; $j++) { 
              $mat[$i][$j] = rand(1,10);
              if ($i == $j) {
                $matPrincipal[] = $mat[$i][$j];
              }              
          }
        } 
        return $matPrincipal;       
    }

    $matrizPrincipal = matriz(6);
    var_dump($matrizPrincipal);    

    ?>
  </body>
</html>