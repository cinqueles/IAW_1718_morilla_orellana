<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Cliente</title>
  </head>
  <body>
    <?php
        if (empty($_GET)) {
          echo "No hay datos que procesar";
          exit();
        }

        if (isset($_GET['dni'])) {
          $connection = new mysqli("192.168.1.104", "root", "Admin2015", "tf");
          $connection->set_charset("uft8");

          if ($connection->connect_errno) {
              printf("Connection failed: %s\n", $connection->connect_error);
              exit();
          }

          $client="SELECT Nombre, Apellidos, count(Matricula) as num
                    FROM clientes c JOIN vehiculos v
                    ON c.codCliente = v.codCliente
                    WHERE DNI='".$_GET['dni']."'
                    GROUP BY c.codCliente;";
          if ($result = $connection->query($client)) {
            $obj = $result->fetch_object();
            echo "<p>".$obj->Nombre." ".$obj->Apellidos."</p>";
            echo "<p>Nº de vehiculos: ".$obj->num."</p>";

          $result->close();
          unset($obj);
          unset($connection);
          }
        }
     ?>
    <p><a href="vehiculos.php">Volver</a></p>
  </body>
</html>
