<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Ejercicio 1</title>
  </head>
  <body>
    <?php
    $data = array(

              '22222222X' => array(
                "Nombre"=> "Juan",
                "Apellidos" => "Perez",
                "Localidad" => "Bormujos"
              ),
              '33333333X' => array(
                "Nombre"=> "Paco",
                "Apellidos" => "Fernández",
                "Localidad" => "Salteras"
              ),
              '44444444X' => array(
                "Nombre"=> "Manuel",
                "Apellidos" => "Rodríguez",
                "Localidad" => "Gines"
              )
    );

      echo "<ul>";
      foreach ($data as $a => $b) {
        echo "<li>".$a."</li>";
        foreach ($b as $k => $v) {
          echo "<ul>";
          echo "<li>".$k." : ".$v."</li>";
          echo "</ul>";
        }
      }
      echo "</ul>";


     ?>
  </body>
</html>
