<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Ejercicio 5</title>
    <style media="screen">
      .par{
        background-color: grey;
      }
      .impar{
        background-color: red;
      }
      td {
        height: 50px;
        width: 50px;
      }
    </style>
  </head>
  <body>
    <table border="1">
    <?php
    $isaaccapullo=0;
    for ($i=0; $i <10 ; $i++) {
      if ($i%2==0) {
        echo "<tr class='par'>";
      }else {
        echo "<tr class='impar'>";
      }
      for ($a=0; $a <10 ; $a++) {
        echo "<td></td>";
      }
      echo "</tr>";
    }
     ?>
     </table>
  </body>
</html>
