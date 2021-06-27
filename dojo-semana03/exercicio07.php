<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <title>Semana 03</title>
    <meta charset="utf-8">
  </head>
  <body>
    <?php

    #7.  Criar uma função que recebe uma string e verifica se o texto é um palíndromo ou não, retornando
    #1 para o caso positivo ou 0 para o caso negativo

    function palindromo($palavra) {
        $vet = (str_split($palavra));
        $max = count($vet);
        for ($i=0; $i <count($vet) ; $i++) { 
            $max--;
            if ($vet[$i] == $vet[$max]){
            return "É palíndromo";                                                       
            }             
            else {
              return "Não é palindromo";  
            }
          }
        }                
    
    $teste = palindromo('osso');
    echo "$teste";

    ?>
  </body>
</html>