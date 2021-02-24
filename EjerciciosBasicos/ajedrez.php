<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Ajedrez</title>
    <link rel="stylesheet" type="text/css" href="estilos.css">
  </head>
  <body>
    <?php
        $filas=1;
        $celda=1;
        $num=($filas+$celda);
        echo "<table border=1>";
        while ($filas <= 8) {
          echo "<tr>";
            while ($celda <= 8) {
              if (($filas+$celda)%2==0){
              echo "<td class=black></td>";
            } else {
              echo "<td></td>";
            }
              $celda++;
              $num++;
            };
          echo "</tr>";
          $filas++;
          $celda=1;

        };
        echo "</table>";
     ?>
  </body>
</html>
