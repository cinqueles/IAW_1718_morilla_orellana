<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Ejercicio 4</title>
  </head>
  <body>
    <h1>Reparacion: <?php echo $_GET['id'] ?></h1>
    <?php
      if (empty($_GET['id'])) {
        echo "No hay datos";
        exit();
      }

      if (isset($_GET['id'])) {
        $connection = new mysqli("192.168.1.104", "root", "Admin2015", "tf");
        $connection->set_charset("uft8");

        if ($connection->connect_errno) {
            printf("Connection failed: %s\n", $connection->connect_error);
            exit();
        }

        $rep="SELECT re.IdRecambio AS recambio, Descripcion, UnidadBase, Stock
                FROM reparaciones r join incluyen i
                ON r.IdReparacion = i.IdReparacion
                JOIN recambios re
                ON i.IdRecambio=re.IdRecambio
                WHERE r.IdReparacion=".$_GET['id'];
        if ($result = $connection->query($rep)) {
          while($obj = $result->fetch_object()) {
            echo "<ul>";
            echo "<li><b>IdRecambio: </b>".$obj->recambio."</li>";
            echo "<li><b>Descripcion: </b>".$obj->Descripcion."</li>";
            echo "<li><b>Unidad base: </b>".$obj->UnidadBase."</li>";
            echo "<li><b>Stock: </b>".$obj->Stock."</li>";
            echo "</ul>";
          }
        $result->close();
        unset($obj);
        unset($connection);
        }
      }
     ?>
  </body>
</html>
