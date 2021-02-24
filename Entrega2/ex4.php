<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Ejercicio 4</title>
  </head>
  <body>
    <?php
      echo "<h1>Color Table</h1>";
      $tabla=["BlanchedAlmond" => "#FFEBCD",
              "CadetBlue" => "#5F9EA0",
              "BurlyWood" => "#DEB887",
              "DarkOliveGreen" => "#556B2F",
              "HotPink" => "#FF69B4",
              "PapayaWhip" => "#FFEFD5"];

      echo "<table border='1px solid'>";
      echo "<tr><td><b>Color Name</b></td><td><b>Hex Code<b></td></tr>";
          foreach ($tabla as $key => $value) {
            echo "<tr style='background-color:$value'>";
            echo "<td>$key</td>";
            echo "<td>$value</td>";
            echo "</tr>";
          }
      echo "</table>";
     ?>
  </body>
</html>
