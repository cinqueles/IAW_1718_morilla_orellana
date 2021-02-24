<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Crear tablas</title>
  </head>
  <body>
    <?php
      $filas=1;
      $celda=1;
      echo "<table>";
      while ($filas <= 5) {
        echo "<tr>";
          while ($celda <= 5) {
            echo "<td> X </td>";
            $celda++;
          };
        echo "</tr>";
        $filas++;
        $celda=1;
      };
      echo "</table>";
      $filas=1;
      $celda=1;
      echo "<table>";

      $filas1=1;
      $celda1=1;
      $i=1;
      while ($filas1 <= 5) {
        echo "<tr>";
          while ($celda1 <= 5) {
            echo "<td> ".$i." </td>";
            $celda1++;
            $i++;
          };
        echo "</tr>";
        $filas1++;
        $celda1=1;
      };
      echo "</table>";
     ?>
  </body>
</html>
