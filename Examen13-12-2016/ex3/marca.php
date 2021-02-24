<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Marcas</title>
  </head>
  <body>
    <?php
     if (empty($_GET)) {
        echo "No hay ningun dato recibido";
        exit();
      }
    if (isset($_GET['marca'])) {
      $connection = new mysqli("192.168.1.104", "root", "Admin2015", "tf");
      $connection->set_charset("uft8");

      if ($connection->connect_errno) {
          printf("Connection failed: %s\n", $connection->connect_error);
          exit();
      }

      $vehi="SELECT count(*) as cant
              FROM vehiculos
              where marca='".$_GET['marca']."'";
      if ($result = $connection->query($vehi)) {
        $obj = $result->fetch_object();
        if ($obj->cant==0) {
          echo "No se han atendido a ningun coche de marca '".$_GET['marca']."'";
        }else{
        echo "Vehiculos ".$_GET['marca']." atenidos: ".$obj->cant;
        }
        $result->close();
        unset($obj);
        unset($connection);
      }else{
        echo "No hay vehiculos atendido con esa marca";
      }
    }

     ?>
     <br>
    <p><a href="vehiculos.php">Volver</a></p>
  </body>
</html>
