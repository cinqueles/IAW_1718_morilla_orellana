<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>propietario</title>
  </head>
  <body>
    <?php
      if (empty($_GET)) {
        echo "No hay ningun dato que procesar";
      }

      if (isset($_GET['matri'])) {
        $connection = new mysqli("192.168.1.104", "root", "Admin2015", "tf");
        $connection->set_charset("uft8");

        if ($connection->connect_errno) {
            printf("Connection failed: %s\n", $connection->connect_error);
            exit();
        }

        $client="SELECT Nombre, Apellidos, Direccion, Telefono
                  FROM clientes c join vehiculos v
                  on c.CodCliente = v.CodCliente
                  where matricula='".$_GET['matri']."'";

        if ($result = $connection->query($client)) {
        $obj = $result->fetch_object();
            echo "<ul>";
            echo "<li>Nombre: ".$obj->Nombre."</li>";
            echo "<li>Apellidos: ".$obj->Apellidos."</li>";
            echo "<li>Direccion: ".$obj->Direccion."</li>";
            echo "<li>Telefono: ".$obj->Telefono."</li>";
            echo "</ul>";
        $result->close();
        unset($obj);
        unset($connection);
        }
      }
     ?>
     <a href="vehiculos.php">Volver</a>
  </body>
</html>
