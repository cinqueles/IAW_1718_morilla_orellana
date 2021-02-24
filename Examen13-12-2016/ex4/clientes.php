<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Clientes ex4</title>
  </head>
  <body>
    <table border="1">
      <tr>
        <th>CodCliente</th>
        <th>DNI</th>
        <th>Apellidos</th>
        <th>Nombre</th>
        <th>Direccion</th>
        <th>Telefono</th>
      </tr>
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
            $cod=$obj->CodCliente;
            echo "<td><a href='editarcliente.php?cod=".$cod."'>".$cod."</a></td>";
            echo "<td>".$obj->DNI."</td>";
            echo "<td>".$obj->Apellidos."</td>";
            echo "<td>".$obj->Nombre."</td>";
            echo "<td>".$obj->Direccion."</td>";
            echo "<td>".$obj->Telefono."</td>";
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
