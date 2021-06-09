<!DOCTYPE html>
<html lang="pt-br">

<head>
  <title>Semana 02</title>
  <meta charset="utf-8">
</head>

<body>
  <?php

  for ($a = 0; $a < 4; $a++) {
    for ($i = 0; $i < 4; $i++) {
      $matriz[$a][$i] = rand(1, 100);
    }
  }
  echo "Matriz: </br>";
  var_dump($matriz);
  echo "</br>";
  for ($i = 0; $i < 4; $i++) {
    $conta += $matriz[$i][$i];
  }

  echo ("</br>O valor da somatória da diagonal principal da matriz é = $conta");

  ?>
</body>

</html>