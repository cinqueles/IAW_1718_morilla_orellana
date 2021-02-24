<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Ejercicio 1</title>
  </head>
  <body>
    <?php
    $var=["A","B","C","D"];
    $a=sizeof($var)-1;
    echo "<ul>";
    while ($a >= 0) {
      echo "<li>".$var[$a]."</li>";
      $a=$a-1;
    }
    echo "</ul>";
     ?>
  </body>
</html>
