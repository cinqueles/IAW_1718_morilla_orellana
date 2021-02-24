<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Destination</title>
  </head>
  <body>
    <?php
    //var_dump($_GET);
      if (empty($_GET)) {
        echo "NADA HA SIDO ENVIADO";
      } else {
        if (isset($_GET["nombre"])) {
          echo "Solo tengo el nombre<br>";
          echo $_GET['nombre'];
        } elseif (isset($_GET["apellido"])) {
          echo "Solo tengo el apellido<br>";
          echo $_GET['apellido'];
        }elseif (isset($_GET["edad"])) {
          echo "Solo tengo la edad<br>";
          echo $_GET['edad'];
        }else {
          echo "Parametro erroneo";
        }
      }
     ?>
  </body>
</html>
