<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Ejercicio 3</title>
    <style media="screen">
      td{
        height: 50px;
        width: 50px;
        border:hidden;
        text-align: center;
      }
    </style>
  </head>
  <body>
    <?php
      $a1=array('A' => 1,'B' => 2, 'C' => 3 );
      $a2=array('D' => 4, 'E' => 5, 'F' => 6);
      $a3=array('G' => 7, 'H' => 8, 'I' => 9);
      $tabla = array($a1,$a2,$a3);

      //var_dump($tabla);
      echo "<table border=1px solid>";
      foreach ($tabla as $a) {
        echo "<tr>";
        foreach ($a as $k => $v) {
          echo "<td>$k:$v<br></td> ";
        }
        echo "</tr>";
      }
      echo "</table>";

     ?>
  </body>
</html>
