<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Ejercicio 2</title>
  </head>
  <body>
    <?php
      $v1=[2,4,6,8];
      $v2=[7,8,9,10];
      $v3=[];

      for ($i=0; $i <sizeof($v1) ; $i++) {
        $v3[]=$v1[$i];
      }
      for ($a=0; $a <sizeof($v2) ; $a++) {
        $v3[]=$v2[$a];
      }

      var_dump($v3);
/*
     echo "<ul>";
      for ($i=0; $i < sizeof($v3) ; $i++) {
        echo "<li>".$v3[$i]."</li>";
      }
      echo "</ul>";

      echo "<h3>Vector 1</h3>";
      echo "<ul>";
      for ($i=0; $i < sizeof($v1) ; $i++) {
        echo "<li>".$v1[$i]."</li>";
      }
      echo "</ul>";
      echo "<h3>Vector 2</h3>";
      echo "<ul>";
      for ($i=0; $i < sizeof($v2) ; $i++) {
        echo "<li>".$v2[$i]."</li>";
      }
      echo "</ul>";*/
     ?>
  </body>
</html>
