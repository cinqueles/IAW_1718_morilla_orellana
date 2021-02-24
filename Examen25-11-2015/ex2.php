<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Ejercicio 2</title>
  </head>
  <body>
    <?php
      $a1=[9,8,7,6,5,4,3,2,1];
      $a2=[1,2,3,4,5,6,7,8,9];
      $a3=[91,82,73,64,55,46,37,28,19];
// SACAR TODOS LOS NUMEROS DEL VECTOR
      for ($i=0;$i<sizeof($a1);$i++) {
        echo $a1[$i]."  ";
      }
      echo "<br>";
      for ($i=0;$i<sizeof($a2);$i++) {
        echo $a2[$i]."  ";
      }
      echo "<br>";
      for ($i=0;$i<sizeof($a3);$i++) {
        echo $a3[$i]."  ";
      }

      echo "<hr>";
  // SACAR LA SUMA DE LOS NUMEROS DE CADA VECTOR
      $sum=0;
      for ($i=0;$i<sizeof($a1);$i++) {
        echo $a1[$i]."  ";
        $sum += $a1[$i];
      }
      echo "<br>";
      echo "La suma total de los numeros del vector a1 es: $sum";
      echo "<br>";
      $sum=0;
      for ($i=0;$i<sizeof($a2);$i++) {
        echo $a2[$i]."  ";
        $sum += $a2[$i];
      }
      echo "<br>";
      echo "La suma total de los numeros del vector a2 es: $sum";
      echo "<br>";
      $sum=0;
      for ($i=0;$i<sizeof($a3);$i++) {
        echo $a3[$i]."  ";
        $sum += $a3[$i];
      }
      echo "<br>";
      echo "La suma total de los numeros del vector a3 es: $sum";

      echo "<hr>";
  // SACAR EL PROMEDIO DE CADA VECTOR
      $sum=0;

      for ($i=0;$i<sizeof($a1);$i++) {
        echo $a1[$i]."  ";
        $sum += $a1[$i];
      }
      echo "Promedio vector a1: ".$sum/sizeof($a1);

      echo "<hr>";
// FUNCION
      function media($ar1,$ar2,$ar3){
        // Primer vector
        $sum=0;
        for ($i=0;$i<sizeof($ar1);$i++) {
          echo $ar1[$i]."  ";
          $sum += $ar1[$i];
        }
        echo "<br>";
        $result['a1']=$sum/sizeof($ar1);

        //Segundo vector
        $sum=0;
        for ($i=0;$i<sizeof($ar2);$i++) {
          echo $ar2[$i]."  ";
          $sum += $ar2[$i];
        }
        echo "<br>";
        $result['a2']=$sum/sizeof($ar2);

        //Tercer vector
        $sum=0;
        for ($i=0;$i<sizeof($ar3);$i++) {
          echo $ar3[$i]."  ";
          $sum += $ar3[$i];
        }
        echo "<br>";
        $result['a3']=$sum/sizeof($ar3);


        return $result;

      }

      var_dump(media($a1,$a2,$a3));


     ?>
  </body>
</html>
