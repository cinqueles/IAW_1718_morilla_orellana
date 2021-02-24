<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Ejercicio 3</title>
  </head>
  <body>
    <?php
      $mes=date("F");
      echo $mes;

      if ($mes!="August") {
        echo "<br>Not August, so at least not in the peak of the heat.";
      }else {
        echo "<br>It's August, so it's really hot.";
      }

     ?>
  </body>
</html>
