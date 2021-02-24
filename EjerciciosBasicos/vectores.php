<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Vectores</title>
  </head>
  <body>
    <?php
        /*array asociativo
         array= clave => valor;
         cuando hagamos consultas a las base de datos devolvera los datos en array asociativos.
         indexado
        $v1=["1","2","3"];
        añadir contendio a un array $v1[]="nuevo valor" (indexado);
        var_dump() --> muestra por pantalla el valor entre parentesis

        añadir contendio a un array asociativo $V2['clave']='valor';
        */

        $v1=["Nombre" => "Manuel",
         "Apellido" => "Perez",
         "Direccion" => "Calle San Jacinto",
         "Email" => "manuel@iestriana.es"];

/*Ejercicio 1*/
        echo "<ul>";
        foreach ($v1 as $k => $v) {
          echo "<li><b>".$k.": </b>".$v."</li>";
        }
        echo "</ul>";

/* Ejercicio 2*/

        echo "<table border=1px>";
        foreach ($v1 as $k => $v) {
          echo "<th>".$k."</th>";
        }
        echo "</tr>";
        echo "<tr>";
        foreach ($v1 as $k => $v) {
          echo "<td>".$v."</td>";
        }
        echo "</table>";
        echo "<br><br>";

/* Ejercicio 3*/
        $v2=[27,89,100,75,2,6,70,50,11,9];
        $suma=0;
        for ($i=0;$i<sizeof($v2);$i++) {
            $suma = $suma + $v2[$i];
        }
        echo "La media es: ".($suma/sizeof($v2)) ."<br><br>";

/*Ejercicio 4*/
        $v2=[27,89,100,75,2,6,70,50,11,9];
        $max=$v2[0];
        $min=$v2[0];

        for ($i=1;$i<sizeof($v2);$i++) {
          if ($max<$v2[$i]) {
            $max=$v2[$i];
          }
          if ($min>$v2[$i]) {
            $min=$v2[$i];
          }
        }
        echo "El maximo es: ".$max."<br>";
        echo "El minimo es: ".$min;
     ?>
  </body>
</html>
