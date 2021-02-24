<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Ejercicio 4</title>
  </head>
  <body>
    <?php
      $a1="abc";
      $a2="xyz";
      $cont=1;
      $cont1=1;

      /*parte 1*/
      while ($cont < 10) {
        echo $a1." ";
          $cont++;
      }
      echo "<br>";

      /*parte 2*/
      do {
        echo $a2." ";
        $cont1++;
      } while ($cont1<10);
      echo "<br>";
      /*parte 3*/
      for ($i=1; $i < 10; $i++) {
        echo $i." ";
      }

      /*parte 4*/
      echo "<ol>";
      $let="A";
      for ($i=1; $i <7 ; $i++) {
        echo "<li>Articulo ".$let++."</li>";
      }
     ?>
  </body>
</html>
