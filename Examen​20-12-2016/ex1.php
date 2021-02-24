<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Ejercicio 1</title>
  </head>
  <body>
    <?php
      $v1=["HOLA","ADIOS","HASTA LUEGO"];

      //Sacar las palabras 1 a 1
      for ($i=0; $i <sizeof($v1) ; $i++) {
        echo $v1[$i]."<br>";
      }
      echo "<hr>";
      //Palabras más su longitud
      for ($i=0; $i <sizeof($v1) ; $i++) {
        // strlen sirve para dar la longitud de una cadena
        echo strlen($v1[$i])." - ";
        echo $v1[$i]."<br>";
      }
      echo "<hr>";

      //Palabra 1 al revés
      $palabra=$v1[0];
      //echo $palabra;
      for ($i=strlen($palabra)-1; $i >=0 ; $i--) {
        echo $palabra[$i];
      }
      echo "<br>";
      $palabra=$v1[1];
      //echo $palabra;
      for ($i=strlen($palabra)-1; $i >=0 ; $i--) {
        echo $palabra[$i];
      }

      echo "<hr>";
      //Todas las palabras al reves
      for ($i=0; $i <sizeof($v1) ; $i++) {
        $palabra=$v1[$i];
        //echo "$palabra";
        for ($a=strlen($palabra)-1; $a >=0 ; $a--) {
          echo $palabra[$a];
        }
        echo "<br>";
      }

      echo "<hr>";

      // Longitud más palabras al reves
        for ($i=0; $i <sizeof($v1) ; $i++) {
          $palabra=$v1[$i];
          echo strlen($v1[$i])." - ";
          //echo "$palabra";
          for ($a=strlen($palabra)-1; $a >=0 ; $a--) {
            echo $palabra[$a];
          }
          echo "<br>";
        }

     ?>
  </body>
</html>
