<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Actualizar Clientes</title>
    <style media="screen">
        img {
          width: 30px;
          height: 30px;
        }
    </style>
  </head>
  <body>
    <table border=1px>

    <?php
      $connection = new mysqli("192.168.1.104", "root", "Admin2015", "tf");
      $connection->set_charset("uft8");

      if ($connection->connect_errno) {
          printf("Connection failed: %s\n", $connection->connect_error);
          exit();
      }

      $client="SELECT * FROM clientes";
      if ($result = $connection->query($client)) {
        while($obj = $result->fetch_object()) {
            echo "<tr>";
              echo "<td>".$obj->CodCliente."</td>";
              echo "<td>".$obj->DNI."</td>";
              echo "<td>".$obj->Apellidos."</td>";
              echo "<td>".$obj->Nombre."</td>";
              echo "<td>".$obj->Direccion."</td>";
              echo "<td>".$obj->Telefono."</td>";
              echo "<td><a href='editar_clientes.php?codigo=".$obj->CodCliente."'><img src='lapiz.png'/></a></td>";
            echo "</tr>";
        }

        $result->close();
        unset($obj);
        unset($connection);
      }

      ?>

    </table>
  </body>
</html>
