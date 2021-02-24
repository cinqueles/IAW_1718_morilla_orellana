<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Ejercicio 2</title>
  </head>
  <body>
    <?php
    $v=['-','X','X','X','-','-','X'];

    function numveces($v,$car){
    $sum1=0;
    for ($i=0;$i<sizeof($v);$i++) {
      if ($v[$i]==$car) {
        $sum1++;
      }
    }
    return $sum1;
  }

  echo "Vector:".var_dump($v)."<br>";

  $uno=numveces($v,'X');
  echo "Cantidad de X: $uno";

  echo "<br>";

  $dos=numveces($v,'-');
  echo "Cantidad de '-': $dos";
     ?>
  </body>
</html>
