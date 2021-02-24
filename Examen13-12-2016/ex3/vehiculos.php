<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Vehiculos</title>
  </head>
  <body>
    <table border="1">
      <tr>
        <th>Matricula</th>
        <th>Marca</th>
        <th>DNI</th>
        <th>Nombre</th>
        <th>Apellidos</th>
      </tr>
      <?php
          $connection = new mysqli("192.168.1.104", "root", "Admin2015", "tf");
          $connection->set_charset("uft8");

          if ($connection->connect_errno) {
              printf("Connection failed: %s\n", $connection->connect_error);
              exit();
          }

          $vehi="SELECT Matricula, Marca, DNI, Nombre, Apellidos
                    FROM vehiculos v JOIN clientes c
                    ON v.codCliente=c.codCliente";
          if ($result = $connection->query($vehi)) {
            while($obj = $result->fetch_object()) {
              echo "<tr>";
              echo "<td>".$obj->Matricula."</td>";
              $marca=$obj->Marca;
              echo "<td><a href='marca.php?marca=".$marca."'>".$marca."</a></td>";
              $dni=$obj->DNI;
              echo "<td><a href='cliente.php?dni=".$dni."'>".$dni."</a></td>";
              echo "<td>".$obj->Nombre."</td>";
              echo "<td>".$obj->Apellidos."</td>";
              echo "</tr>";
            }
          //LIMPIAR EL CURSOR
          $result->close();
          unset($obj);
          unset($connection);
          }
       ?>
    </table>
  </body>
</html>
